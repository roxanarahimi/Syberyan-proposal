<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\UserController::class)->group(function () {
    Route::get('/hi', 'index');
    Route::get('/search', 'search');
    Route::get('/user/{user}', 'user');
});
