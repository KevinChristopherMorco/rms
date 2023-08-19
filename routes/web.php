<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [UserController::class, 'index'])->name('welcome');


Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register/create', [RegisterController::class, 'create'])->name('register.create');

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login/process', [LoginController::class, 'process'])->name('login.process');
// Route::get('/home', [UserController::class, 'home'])->name('home');

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/auth/password/email', [UserController::class, 'resetPassword'])->name('resetPassword');



Route::get('/home', function(){
    return view('home');
})->middleware('auth');


Auth::routes();
