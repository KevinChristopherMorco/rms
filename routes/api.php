<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// book api routes

Route::get('/books/{id}', [BookController::class, 'findBookId']);
Route::get('/users/{id}', [UserController::class, 'findUserId']);

Route::get('/books/{id}/edit', [BookController::class, 'findBookId'])->name('book.edit');

Route::get('/catalogfilter',[BookController::class, 'findBookFilter']);

