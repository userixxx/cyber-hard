<?php

use App\Http\Controllers\VoiceTextController;
use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/generate-voice', [VoiceTextController::class, 'generateVoice']);
Route::post('/generate-text', [VoiceTextController::class, 'generateText']);
Route::post('/generate-text-and-voice', [VoiceTextController::class, 'generateTextAndVoice']);

Route::post('/payment', [PaymentController::class, 'processPayment']);