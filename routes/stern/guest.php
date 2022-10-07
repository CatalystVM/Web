<?php

use Illuminate\Support\Facades\Route;

Route::controller('LoginController')->group(function() {
    Route::get('/login', ['as' => 'login', 'uses' => 'create']);
    Route::post('/login/post', ['as' => 'login::post', 'uses' => 'store']);
});

Route::controller('ForgotPasswordController')->group(function() {
    Route::get('/forgot', ['as' => 'forgot', 'uses' => 'index']);
    Route::post('/forgot', ['as' => 'forgot::post', 'uses' => 'post']);
});