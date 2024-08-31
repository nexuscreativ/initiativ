<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ScholarshipController;

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
    return view('index');
})->name('home');


Route::get('/signup', function () {
    return  view('pages.auth.signup');
});



Route::get('/login', function () {
    return  view('pages.auth.login');
});

Route::get('/apply', function () {
    return  view('pages.scholarship');
});



Route::post('signup', [AuthController::class, 'signup']);
Route::post('login', [AuthController::class, 'login']);

Route::post('apply', [ScholarshipController::class, 'store']);

Route::get('dashboard', function () {
    return  view('dashboard');
});
