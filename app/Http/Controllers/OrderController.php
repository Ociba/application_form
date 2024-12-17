<?php
// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Services\PesapalService;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    protected $pesapalService;
    
    public function __construct(PesapalService $pesapalService)
    {
        $this->pesapalService = $pesapalService;
        
    }


    public function showConfirmation($orderTrackingId)
    {
        if (!$orderTrackingId) {
            return view('order_status', ['error' => 'Invalid request. No order tracking ID provided.']);
        }
    
        try {
            $transactionStatus = $this->pesapalService->getTransactionStatus($orderTrackingId);
    
            if ($transactionStatus && isset($transactionStatus['status_code'])) {
                return view('order_status', compact('transactionStatus'));
            }
    
            // Handle Pesapal errors or unexpected responses
            $error = $transactionStatus['error'] ?? null;
            if ($error) {
                Log::error('Pesapal Error Response:', ['error' => $error]);
                return view('order_status', ['error' => $error['message'] ?? 'An error occurred while retrieving transaction status.']);
            }
    
            Log::error('Unexpected Pesapal Response:', ['response' => $transactionStatus]);
            return view('order_status', ['error' => 'Unexpected response from payment gateway. Please try again.']);
    
        } catch (\Exception $e) {
            Log::error('Error fetching transaction status.', ['error' => $e->getMessage()]);
            return view('order_status', ['error' => 'An error occurred while fetching transaction status. Please try again later.']);
        }

    
    }
}
