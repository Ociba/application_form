<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class IPNService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function registerIPN($accessToken, $url)
{
    try {
        $response = $this->client->post('https://cybqa.pesapal.com/pesapalv3/api/URLSetup/RegisterIPN', [
            'headers' => [
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'url' => $url,
                'ipn_notification_type' => 'GET',
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    } catch (\GuzzleHttp\Exception\ClientException $e) {
        Log::error('Client Exception:', ['message' => $e->getMessage()]);
        throw $e;
    } catch (\GuzzleHttp\Exception\ServerException $e) {
        Log::error('Server Exception:', ['message' => $e->getMessage()]);
        throw $e;
    } catch (\Exception $e) {
        Log::error('General Exception:', ['message' => $e->getMessage()]);
        throw $e;
    }
}


}
