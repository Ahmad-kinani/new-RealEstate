<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/test', function (Request $request) {
    return $request;
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
