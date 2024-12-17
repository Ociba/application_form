<?php

namespace App\Http\Controllers;

use App\Services\PesapalService;
use Illuminate\Http\JsonResponse;
use Exception;
use Carbon\Carbon;
use App\Services\IPNService;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;



class APIController extends Controller
{
    protected $pesapalService;
    protected $ipnService;
    protected $token;

    public function __construct(PesapalService $pesapalService,IPNService $ipnService)
    {
        $this->pesapalService = $pesapalService;
        $this->ipnService = $ipnService;
        $this->pesapalService->getAccessToken();
    }

    /**
     * Get Pesapal access token.
     *
     * @return JsonResponse
     */
    public function getToken(): JsonResponse
    {
        try {
            // Fetch the token from the Pesapal service
            $token = $this->pesapalService->getAccessToken();

            // Get the current time and calculate expiry time (assuming a 5-minute expiry for the token)
            $expiryDate = Carbon::now()->addMinutes(20)->toIso8601String();

            // Prepare the response dynamically
            $response = [
                'token' => $token,
                'expiryDate' => $expiryDate,
                'error' => $this->getError(null),  // Set error dynamically, null if no error
                'status' => $this->getStatusCode(true),  // Dynamically setting the status
                'message' => $this->getMessage(true),  // Dynamically setting the message
            ];

            return response()->json($response);
        } catch (Exception $e) {
            // If an exception occurs, return the error message dynamically
            $response = [
                'error' => $e->getMessage(),
                'status' => $this->getStatusCode(false),  // Dynamically setting the status for failure
                'message' => $this->getMessage(false),  // Dynamically setting the message for failure
            ];

            return response()->json($response, 500);
        }
    }

    /**
     * Get the status code based on success or failure.
     *
     * @param bool $success
     * @return string
     */
    private function getStatusCode(bool $success): string
    {
        return $success ? '200' : '500';  // Return 200 for success, 500 for error
    }

    private function getError(?string $error): ?string
    {
        return $error;  // Return the error message or null if no error
    }

    /**
     * Get the message based on success or failure.
     *
     * @param bool $success
     * @return string
     */
    private function getMessage(bool $success): string
    {
        return $success ? 'Request processed successfully' : 'Request failed';  // Return message based on success or failure
    }

    public function registerIPN(PesapalService $pesapalService)
    {
        $baseUrl = 'https://cybqa.pesapal.com/pesapalv3/api/URLSetup/RegisterIPN';

        try {
            // Retrieve the access token from PesapalService
            $accessToken = $pesapalService->getAccessToken();

            $payload = [
                'url' => 'https://myapplication.com/ipn', // Replace with your actual URL
                'ipn_notification_type' => 'GET',
            ];

            // Send the request to Pesapal
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Content-Type' => 'application/json',
            ])->post($baseUrl, $payload);

            // Check the response status and return accordingly
            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'message' => 'IPN registered successfully',
                    'data' => $response->json(),
                ]);
            }

            // Handle error responses
            return response()->json([
                'success' => false,
                'message' => 'Failed to register IPN',
                'error' => $response->body(),
            ], $response->status());
        } catch (\Exception $e) {
            // Catch and handle exceptions
            return response()->json([
                'success' => false,
                'message' => 'An error occurred',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    //Fetching Registered IPNs
    public function getRegisteredIPNs(PesapalService $pesapalService)
    {
        // Define the sandbox/demo and production URLs
        $sandboxUrl = 'https://cybqa.pesapal.com/pesapalv3/api/URLSetup/GetIpnList';
        $productionUrl = 'https://pay.pesapal.com/v3/api/URLSetup/GetIpnList';

        // Select the appropriate URL based on your environment
        $baseUrl = env('PESAPAL_ENV') === 'production' ? $productionUrl : $sandboxUrl;

        try {
            // Retrieve the access token from the PesapalService
            $accessToken = $pesapalService->getAccessToken();

            // Send a GET request to the Pesapal GetIPNList API
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Accept' => 'application/json',
            ])->get($baseUrl);

            // Check the response status
            if ($response->successful()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Registered IPNs retrieved successfully',
                    'data' => $response->json(),
                ]);
            }

            // Handle error responses
            return response()->json([
                'success' => false,
                'message' => 'Failed to fetch registered IPNs',
                'error' => $response->body(),
            ], $response->status());
        } catch (\Exception $e) {
            // Catch and handle exceptions
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while fetching registered IPNs',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    

    /**
     * This code is to show home page and form
     */
    
     
     public function showForm(PesapalService $pesapalService)
{
    try {
        // Fetch the registered IPNs using the getRegisteredIPNs method
        $response = $this->getRegisteredIPNs($pesapalService);

        // Access the data from the response using object notation
        $responseData = $response->getData();

        // Check if the response was successful and contains the data
        if ($responseData->success && isset($responseData->data) && count($responseData->data) > 0) {
            // Assuming you want to use the first IPN ID from the response
            $ipnId = $responseData->data[0]->ipn_id;  // Use object notation here

            // Proceed with your logic, e.g., pass to view
            return view('welcome', compact('ipnId'));
        } else {
            // If no IPN data found, log and handle the error
            Log::info('No IPN data found in the response from getRegisteredIPNs.');
            return response()->json(['error' => 'No IPN data found'], 404);
        }
    } catch (\Exception $e) {
        // Log any exceptions that occur
        Log::error('Pesapal Error:', [
            'error' => $e->getMessage(),
        ]);
        return response()->json(['error' => $e->getMessage()], 500);
    }
}




    /**
     * This is function for submitting an order
     */
    public function submitOrderRequest(Request $request, PesapalService $pesapalService)
    {
        // Define the sandbox/demo and production URLs
        $sandboxUrl = 'https://cybqa.pesapal.com/pesapalv3/api/Transactions/SubmitOrderRequest';
        $productionUrl = 'https://pay.pesapal.com/v3/api/Transactions/SubmitOrderRequest';

        // Select the appropriate URL based on your environment
        $baseUrl = env('PESAPAL_ENV') === 'production' ? $productionUrl : $sandboxUrl;

        // Request payload
        $payload = [
            "id" => $request->input('id'),
            "currency" => $request->input('currency', 'KES'),
            "amount" => $request->input('amount'),
            "description" => $request->input('description'),
            "callback_url" => $request->input('callback_url'),
            "redirect_mode" => $request->input('redirect_mode', ''),
            "notification_id" => $request->input('notification_id'),
            "branch" => $request->input('branch'),
            "billing_address" => [
                "email_address" => $request->input('billing_address.email_address'),
                "phone_number" => $request->input('billing_address.phone_number'),
                "country_code" => $request->input('billing_address.country_code'),
                "first_name" => $request->input('billing_address.first_name'),
                "middle_name" => $request->input('billing_address.middle_name', ''),
                "last_name" => $request->input('billing_address.last_name'),
                "line_1" => $request->input('billing_address.line_1'),
                "line_2" => $request->input('billing_address.line_2', ''),
                "city" => $request->input('billing_address.city', ''),
                "state" => $request->input('billing_address.state', ''),
                "postal_code" => $request->input('billing_address.postal_code', ''),
                "zip_code" => $request->input('billing_address.zip_code', '')
            ]
        ];

        try {
            // Retrieve the access token from the PesapalService
            $accessToken = $pesapalService->getAccessToken();

            // Send a POST request to the Pesapal SubmitOrderRequest API
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $accessToken,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ])->post($baseUrl, $payload);

            // Check the response status
            if ($response->successful()) {

                $responseData = $response->json();

                // If the response has 'data', extract the 'order_tracking_id'
                if (isset($responseData['order_tracking_id'])) {
                    $orderTrackingId = $responseData['order_tracking_id'];
                      // Redirect the user to a confirmation page with orderTrackingId
                    return redirect()->route('order.confirmation', ['order_tracking_id' => $orderTrackingId])
                    ->with('success', 'Order submitted successfully!');
                } else {
                    // Handle case where 'order_tracking_id' is not found
                    return response()->json([
                        "success" => false,
                        "message" => "Order tracking ID not found in response",
                        "error" => $responseData,
                    ], 400);
                }
                return response()->json([
                    "success" => true,
                    "message" => "Order submitted successfully",
                    // "data" => $response->json(),
                    // "order_tracking_id" => $orderTrackingId,
                    "data" => $responseData,
                    "order_tracking_id" => $orderTrackingId,
                    "redirect_url" => $responseData['redirect_url'] ?? null,
                ]);
            } else {
                return response()->json([
                    "success" => false,
                    "message" => "Failed to submit order",
                    "error" => $response->body(),
                ], $response->status());
            }
        } catch (Exception $e) {
            // Handle error if the request fails
            return response()->json([
                "success" => false,
                "message" => "An error occurred while submitting the order",
                "error" => $e->getMessage(),
            ], 500);
        }
    }

    public function getTransactionStatus($orderTrackingId)
{
    // Define the API URL
    $apiUrl = "https://cybqa.pesapal.com/pesapalv3/api/Transactions/GetTransactionStatus";

    // Send the GET request, passing the orderTrackingId as a query parameter
    $response = Http::withToken($this->token) // Include the token in the Bearer Authorization header
        ->accept('application/json') // Add the required Accept header
        ->get($apiUrl, [
            'orderTrackingId' => $orderTrackingId, // Pass orderTrackingId as a query parameter
        ]);

    // Check if the response is successful
    if ($response->successful()) {
        return $response->json();
    }

    // Log any error if the request failed
    $error = $response->json();
    Log::error('Pesapal API Error:', ['response' => $error]);

    return null; // Return null if error occurs
}


}
