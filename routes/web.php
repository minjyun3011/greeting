<?php

use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

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

Route::get('/comments/random', [GreetingController::class, 'randomwords']);

Route::get('/comments/{words}', [GreetingController::class, 'words']);

Route::get('/comments/freeword/{comment}', [GreetingController::class, 'comments']);


