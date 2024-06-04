<?php

use App\Http\Controllers\mess;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/message', [mess::class, 'index']);