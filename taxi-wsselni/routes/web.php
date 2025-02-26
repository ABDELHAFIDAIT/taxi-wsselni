<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
// Route::get('/chauffeurs', function () {
//     return view('pages.chauffeurs');
// })->name('chauffeurs');

Route::get('/chauffeurs', [UserController::class,'drivers'])->name('chauffeurs');

// Chauffeur Details Page
Route::get('/chauffeur/{id}', function () {
    return view('pages.chaffeur');
})->name('details');


// Login & Register
Route::middleware(['guest'])->group(function(){
    Route::get('/login',[AuthController::class, 'showLogin'])->name('show.login');
    Route::get('/register',[AuthController::class, 'showRegister'])->name('show.register');

    Route::post('/login',[AuthController::class, 'login'])->name('connect');
    Route::post('/register',[AuthController::class, 'register'])->name('register');
});


// Logout
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');


// Profile
Route::middleware(['auth'])->group(function(){
    Route::get('/passenger/profile',function(){ return view('passenger.profile'); })->name('passenger.profile');
});