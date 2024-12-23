<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\APIController;
use App\Http\Controllers\OrderController;

Route::get('/apply-now-test/', function () { return view('welcome');});
Route::get('/apply-now-test', function () { return view('welcome');});
Route::get('/', function () { return view('welcome');});

// Define routes for saving session values
Route::post('/save-session-nationality', [SessionController::class, 'saveNationality'])->name('saveSessionNationality');
Route::post('/save-session-visaType', [SessionController::class, 'saveVisaType'])->name('saveSessionVisaType');


// Route in web.php
Route::get('/pesapal/token', [APIController::class, 'getToken']);
Route::get('/pesapal/ipn', [APIController::class, 'registerIPN']);
Route::get('/get-registered-ipns', [APIController::class, 'getRegisteredIPNs']);
//Route::get('/', [APIController::class, 'showForm']);
Route::post('/submit-order', [APIController::class, 'submitOrderRequest'])->name('submit.order');
// Route::get('/order-status/{orderTrackingId}', [OrderController::class, 'showTransactionStatus']);
Route::get('/order-confirmation/{order_tracking_id}', [OrderController::class, 'showConfirmation'])->name('order.confirmation');

