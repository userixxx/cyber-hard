<?php

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

Route::post('/payment', function (Request $request) {
    // Пример обработки данных
    $userId = $request->input('user_id');
    $amount = $request->input('amount');

    // Здесь можно выполнить сохранение в базу данных или любую другую логику
    return response()->json(['status' => 'Payment processed', 'user_id' => $userId, 'amount' => $amount]);
});