<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('create-user', [\App\Http\Controllers\UserController::class, 'store'])->name('create.user');
