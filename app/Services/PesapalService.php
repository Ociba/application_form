<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Exception;

class PesapalService
{
    protected $tokenUrl;

    public function __construct()
    {
        // Set the Pesapal token URL from the environment
        $this->tokenUrl = env('PESAPAL_TOKEN_URL');
    }

    /**
     * Get the access token from Pesapal.
     *
     * @return string
     * @throws Exception
     */
    public function getAccessToken()
    {
        // Log request details for debugging
        Log::info('Pesapal Request:', [
            'url' => $this->tokenUrl,
            'consumer_key' => env('PESAPAL_CONSUMER_KEY'),
            'consumer_secret' => env('PESAPAL_CONSUMER_SECRET'),
        ]);

        // Prepare the data to be sent as raw JSON
        $data = [
            'consumer_key' => env('PESAPAL_CONSUMER_KEY'),
            'consumer_secret' => env('PESAPAL_CONSUMER_SECRET'),
        ];

        // Create a new Guzzle client
        $client = new Client();

        // Send POST request using Guzzle
        try {
            $response = $client->post($this->tokenUrl, [
                'json' => $data,  // Automatically encodes as JSON
                'headers' => [
                    'Accept' => 'application/json',  // Set the Accept header
                    'Content-Type' => 'application/json',  // Set the Content-Type header
                ],
            ]);

            // Get the response body
            $responseBody = $response->getBody()->getContents();
            Log::info('Pesapal Response:', [
                'status' => $response->getStatusCode(),
                'body' => $responseBody,
            ]);

            // Parse the JSON response
            $responseData = json_decode($responseBody, true);

            // Check if token exists in response and return it
            if (isset($responseData['token'])) {
                $accessToken = $responseData['token'];
                Cache::put('pesapal_access_token', $accessToken, 300);  // Cache the token for 5 minutes
                return $accessToken;
            } else {
                throw new Exception('Token key not found in response: ' . $responseBody);
            }
        } catch (Exception $e) {
            Log::error('Pesapal Request Error:', [
                'error' => $e->getMessage(),
            ]);
            throw new Exception('Failed to get access token: ' . $e->getMessage());
        }
        Log::info('Access Token:', ['token' => $accessToken]);
    }

    //This function is usedto register IPN
    function registerIPN(PesapalService $pesapalService)
{
    $baseUrl = 'https://cybqa.pesapal.com/pesapalv3/api/URLSetup/RegisterIPN';

    // Retrieve the token using the service
    $accessToken = $pesapalService->getAccessToken();

    $payload = [
        'url' => 'https://myapplication.com/ipn',
        'ipn_notification_type' => 'GET',
    ];

    // Send the HTTP request with the dynamic token
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $accessToken,
        'Content-Type' => 'application/json',
    ])->post($baseUrl, $payload);

    // Check and return the response
    if ($response->successful()) {
        return $response->json();
    }

    return $response->body(); // Handle errors gracefully
}

  // Function to get transaction status from Pesapal
  public function getTransactionStatus($orderTrackingId)
  {
      $url = env('PESAPAL_ENV') === 'production'
          ? "https://pay.pesapal.com/v3/api/Transactions/GetTransactionStatus/{$orderTrackingId}"
          : "https://cybqa.pesapal.com/pesapalv3/api/Transactions/GetTransactionStatus/{$orderTrackingId}";
  
      $bearerToken = $this->getAccessToken();
  
      try {
          $response = Http::withHeaders([
              'Accept' => 'application/json',
              'Content-Type' => 'application/json',
              'Authorization' => 'Bearer ' . $bearerToken,
          ])->get($url);
  
          if ($response->successful()) {
              $responseData = $response->json();
  
              // Log the whole response for debugging
              Log::info('Pesapal API Response:', ['response' => $responseData]);
  
              // Check if the response has the 'data' key
              if (isset($responseData['data'])) {
                  return $responseData['data'];
              }
  
              // If the 'data' key doesn't exist, log and return null
              Log::error('Unexpected API Response Format:', ['response' => $responseData]);
              return null;
          } else {
              Log::error('Pesapal API Error:', [
                  'status' => $response->status(),
                  'response' => $response->body()
              ]);
          }
      } catch (\Exception $e) {
          Log::error('Exception in getTransactionStatus:', ['message' => $e->getMessage()]);
      }
  
      return null;
  }
  

  
}
