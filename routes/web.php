<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\CustomTestController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('welcome');
Route::get('/test', [\App\Http\Controllers\UserController::class, 'test'])->name('test');
Route::post('/test', [CustomTestController::class, 'create'])->name('test.create');

Route::get('/register', [\App\Http\Controllers\UserController::class, 'register'])->name('register');
Route::any('/registers', [RegisterController::class, 'create'])->name('register.create');

Route::get('/login', [\App\Http\Controllers\UserController::class, 'login'])->name('login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
