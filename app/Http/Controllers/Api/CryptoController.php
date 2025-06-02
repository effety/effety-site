<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
class CryptoController extends Controller
{
    public function getCryptoCoins()
    {
        try {
            // Fetch data from Binance API using Http Client
            $response = Http::withOptions(['verify' => false])->get("https://api.binance.com/api/v3/ticker/24hr");

    
            // Check for a successful response
            if ($response->successful()) {
                $data = $response->json();
                return response()->json($data);
            }
    
            // Handle non-successful responses
            return response()->json(['error' => 'Failed to fetch data'], $response->status());
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch data', 'message' => $e->getMessage()], 500);
        }
    }
}
