<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home'); // Отправка на home.blade.php
});

//Route::get('/dashboard', function () {
//    return view('dashboard'); // Отправка на dashboard.blade.php
//});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/card-detail/{site}/{date}', [DashboardController::class, 'showCardDetail']);

//Route::resource('dashboard', Admin\DashboardController::class);