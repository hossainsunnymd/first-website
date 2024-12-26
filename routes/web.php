<?php

use App\Http\Controllers\appController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/','Pages.home')->name('home');
Route::view('/about','Pages.about')->name('about');
Route::view('/login','Pages.login')->name('login');
Route::view('/resume','Pages.resume')->name('resume');

Route::post('/something',[appController::class,'hi']);

Route::get('/hello',[appController::class,'ipAddress'])->middleware('throttle:5,1');
