<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\FlagBigPageController;
use App\Http\Controllers\FlatCardController;
use App\Http\Controllers\HackathonCardController;
use App\Http\Controllers\HackathonPageController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ScheduleCardController;
use App\Http\Controllers\SearchSectionController;
use App\Http\Controllers\TravelCardController;
use App\Http\Controllers\UserSectionsController;
use App\Http\Controllers\VacanciesCardController;

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
Route::get('/home', function () {
    return view('home');
})->name('home');

// Маршруты для входа и выхода, доступны для всех
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Маршруты с middleware 'auth', доступные только для авторизованных пользователей
Route::middleware(['auth'])->group(function () {
    Route::get('/chat', [ChatController::class, 'index']);
});