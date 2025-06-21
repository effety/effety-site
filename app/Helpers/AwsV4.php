<?php

namespace App\Helpers;

class AwsV4
{
    private $accessKeyID;
    private $secretAccessKey;
    private $path;
    private $regionName;
    private $serviceName;
    private $httpMethodName;
    private $awsHeaders = [];
    private $payload = "";

    private $HMACAlgorithm = "AWS4-HMAC-SHA256";
    private $aws4Request = "aws4_request";
    private $strSignedHeader;
    private $xAmzDate;
    private $currentDate;

    public function __construct($accessKeyID, $secretAccessKey)
    {
        $this->accessKeyID = $accessKeyID;
        $this->secretAccessKey = $secretAccessKey;
        $this->xAmzDate = $this->getTimeStamp();
        $this->currentDate = $this->getDate();
    }

    private function getTimeStamp()
    {
        return gmdate("Ymd\THis\Z");
    }

    private function getDate()
    {
        return gmdate("Ymd");
    }

    public function setPath($path) { $this->path = $path; }
    public function setServiceName($serviceName) { $this->serviceName = $serviceName; }
    public function setRegionName($regionName) { $this->regionName = $regionName; }
    public function setPayload($payload) { $this->payload = $payload; }
    public function setRequestMethod($method) { $this->httpMethodName = $method; }
    public function addHeader($name, $value) { $this->awsHeaders[$name] = $value; }

    public function getHeaders()
    {
        $this->awsHeaders['x-amz-date'] = $this->xAmzDate;
        $this->awsHeaders['x-amz-content-sha256'] = hash('sha256', $this->payload);
        
        ksort($this->awsHeaders);
        
        $canonicalURL = $this->prepareCanonicalRequest();
        $stringToSign = $this->prepareStringToSign($canonicalURL);
        $signature = $this->calculateSignature($stringToSign);
        
        $this->awsHeaders['Authorization'] = $this->buildAuthorizationString($signature);
        return $this->awsHeaders;
    }

    private function prepareCanonicalRequest()
    {
        $canonicalURL = $this->httpMethodName . "\n" . $this->path . "\n\n";
        
        $signedHeaders = '';
        foreach ($this->awsHeaders as $key => $value) {
            $signedHeaders .= strtolower($key) . ';';
            $canonicalURL .= strtolower($key) . ':' . trim($value) . "\n";
        }
        
        $canonicalURL .= "\n";
        $this->strSignedHeader = substr($signedHeaders, 0, -1);
        $canonicalURL .= $this->strSignedHeader . "\n";
        $canonicalURL .= hash('sha256', $this->payload);
        
        return $canonicalURL;
    }

    private function prepareStringToSign($canonicalURL)
    {
        return $this->HMACAlgorithm . "\n" .
            $this->xAmzDate . "\n" .
            $this->currentDate . '/' . $this->regionName . '/' . $this->serviceName . '/' . $this->aws4Request . "\n" .
            hash('sha256', $canonicalURL);
    }

    private function calculateSignature($stringToSign)
    {
        $kSecret = 'AWS4' . $this->secretAccessKey;
        $kDate = hash_hmac('sha256', $this->currentDate, $kSecret, true);
        $kRegion = hash_hmac('sha256', $this->regionName, $kDate, true);
        $kService = hash_hmac('sha256', $this->serviceName, $kRegion, true);
        $kSigning = hash_hmac('sha256', $this->aws4Request, $kService, true);
        
        return hash_hmac('sha256', $stringToSign, $kSigning);
    }

    private function buildAuthorizationString($signature)
    {
        return $this->HMACAlgorithm . ' ' .
            'Credential=' . $this->accessKeyID . '/' . $this->currentDate . '/' . $this->regionName . '/' . $this->serviceName . '/' . $this->aws4Request . ', ' .
            'SignedHeaders=' . $this->strSignedHeader . ', ' .
            'Signature=' . $signature;
    }
}