<?php

use App\Models\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/login',[LoginController::class,'login'])->name('login');

