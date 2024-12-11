<?php
// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use App\Services\PesapalService;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $pesapalService;

    public function __construct(PesapalService $pesapalService)
    {
        $this->pesapalService = $pesapalService;
    }

    // public function showTransactionStatus(Request $request)
    // {
    //     // Make sure you get the order tracking ID from the API or request
    //     $orderTrackingId = $request->input('89240999-b12d-4951-885a-dc691a2d6c76');
    
    //     if ($orderTrackingId) {
    //         Log::info('Order Tracking ID:', ['orderTrackingId' => $orderTrackingId]);
    
    //         // Call the service method to fetch the transaction status
    //         $transactionStatus = $this->pesapalService->getTransactionStatus($orderTrackingId);
    
    //         // Check if the transaction status is available
    //         if ($transactionStatus) {
    //             return view('order_status', compact('transactionStatus'));
    //         } else {
    //             Log::error('Transaction status not found or unable to fetch.');
    //             return view('order_status', ['error' => 'Unable to retrieve transaction status.']);
    //         }
    //     }
    
    //     return view('order_status', ['error' => 'Invalid request. No order tracking ID provided.']);
    // }
    public function showTransactionStatus($orderTrackingId)
{
    if ($orderTrackingId) {
        Log::info('Order Tracking ID:', ['orderTrackingId' => $orderTrackingId]);

        // Call the service method to fetch the transaction status
        $transactionStatus = $this->pesapalService->getTransactionStatus($orderTrackingId);

        // Check if the transaction status is available
        if ($transactionStatus) {
            return view('order_status', compact('transactionStatus'));
        } else {
            Log::error('Transaction status not found or unable to fetch.');
            return view('order_status', ['error' => 'Unable to retrieve transaction status.']);
        }
    }

    return view('order_status', ['error' => 'Invalid request. No order tracking ID provided.']);
}

    
    
}
