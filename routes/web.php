<?php

use App\Http\Controllers\ClientController;
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
//Route::any will be changed accordingly
Route::get('/', [ClientController::class, 'index'])->name('welcome');


Route::get('/register', [ClientController::class, 'register'])->name('register');
Route::any('/registers', [ClientController::class, 'create'])->name('register.create');

Route::get('/login', [ClientController::class, 'login'])->name('login');
Auth::routes();

Route::get('/home', [ClientController::class, 'index'])->name('home');
