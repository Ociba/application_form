<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('/', function () { return view('welcome');});

// Define routes for saving session values
Route::post('/save-session-nationality', [SessionController::class, 'saveNationality'])->name('saveSessionNationality');
Route::post('/save-session-visaType', [SessionController::class, 'saveVisaType'])->name('saveSessionVisaType');
