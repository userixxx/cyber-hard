<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ChatController;
use Inertia\Inertia;

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
// Маршрут для домашней страницы, доступен для всех
Route::get('/', function () {
    return redirect()->route('home.page');
});

// Маршруты для входа и выхода, доступны для всех
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Маршруты с middleware 'auth', доступные только для авторизованных пользователей
Route::middleware(['auth'])->group(function () {
    Route::get('/chat', [ChatController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index'])->name('home.page');
});