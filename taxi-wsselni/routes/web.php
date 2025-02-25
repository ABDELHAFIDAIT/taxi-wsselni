<?php

use App\Http\Controllers\AuthController;
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

// Home Page
Route::get('/', function () { return view('index');})->name('homepage');

// Services Page
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

// Chauffeurs Page
Route::get('/chauffeurs', function () {
    return view('pages.chauffeurs');
})->name('chauffeurs');

// Chauffeur Details Page
Route::get('/chauffeur/{id}', function () {
    return view('pages.chaffeur');
})->name('details');

Route::middleware(['guest'])->group(function(){
    Route::get('/login',[AuthController::class, 'showLogin'])->name('login');
    Route::get('/register',[AuthController::class, 'showRegister'])->name('register');
});