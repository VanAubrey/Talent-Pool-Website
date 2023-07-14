<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SignUpController;

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
/* Hompage*/
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});



Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user',[UserController::class,'test1']);
Route::get('signup',[SignUpController::class,'testsignup']);
Route::post('signup',[SignUpController::class,'testsignup']);







