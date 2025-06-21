<?php

namespace App\Http\Controllers;

use App\Helpers\AwsV4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Exception;

class AmazonProductController extends Controller
{
    private $accessKey = 'AKPA8VPDPE1749230992'; // Replace with your access key
    private $secretKey = 'b+GtwiGFZoab4xt6ARKdVKWZ3OYc6GxD1xXyQot1'; // Replace with your secret key
    private $partnerTag = 'plantsshop-20'; // Replace with your Associate tracking ID
    private $region = 'us-east-1';
    private $service = 'ProductAdvertisingAPI';
    private $host = 'webservices.amazon.com';
    private $uri = '/paapi5/searchitems';

 public function index(Request $request)
{
    try {
        $payload = json_encode([
            'PartnerType' => 'Associates',
            'PartnerTag' => $this->partnerTag,
            'Keywords' => $request->get('keywords', 'Harry Potter'),
            'SearchIndex' => 'All',
            'Resources' => [
                "Images.Primary.Small",
                "ItemInfo.Title",
                "Offers.Listings.Price"
            ]
        ]);

        $aws = new AwsV4($this->accessKey, $this->secretKey);
        $aws->setRegionName($this->region);
        $aws->setServiceName($this->service);
        $aws->setPath($this->uri);
        $aws->setPayload($payload);
        $aws->setRequestMethod("POST");
        $aws->addHeader('content-type', 'application/json; charset=utf-8');
        $aws->addHeader('host', $this->host);
        $aws->addHeader('x-amz-target', 'com.amazon.paapi5.v1.ProductAdvertisingAPIv1.SearchItems');

        $headers = $aws->getHeaders();

        $response = Http::withHeaders($headers)
            ->withBody($payload, 'application/json')
            ->post("https://{$this->host}{$this->uri}");

        $responseBody = $response->body();

        if ($response->failed()) {
            throw new Exception("API Error: " . $responseBody);
        }

        return response()->json(json_decode($responseBody, true));

    } catch (Exception $e) {
        return response()->json([
            'error' => 'Amazon API Error',
            'message' => $e->getMessage(),
            'debug' => [
                'payload' => $payload ?? null,
                'headers' => $headers ?? null,
            ]
        ], 500);
    }
}
}
