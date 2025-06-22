<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/login',[LoginController::class,'login'])->name('login');

Route::get('/signup',[LoginController::class,'signup'])->name('signup');

Route::post('/do-login',[LoginController::class,'doLogin'])->name('do-login');

Route::post('/do-signup',[SignUpController::class,'signup'])->name('do-signup');


Route::middleware(['auth','user'])->group([
    // Route::get('/home',)
]);

Route::middleware(['auth','admin'])->group([
    //
]);

Route::middleware(['auth'])->group([

]);

