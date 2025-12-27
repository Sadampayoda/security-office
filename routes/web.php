<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('index');
// });

Route::controller(AuthController::class)->group(function(){
    Route::get('/','index')->name('auth.view');
    Route::post('/','auth')->name('auth.login');
});

Route::controller(DashboardController::class)->group(function(){
    Route::get('/','index')->name('dasboard');
});
