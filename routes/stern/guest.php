<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Auth', 'as' => 'auth::', 'middleware' => ['guest']], function() {
    Route::controller('LoginController')->group(function() {
        Route::get('/login', ['as' => 'login', 'uses' => 'index']);
        Route::post('/login/post', ['as' => 'login::post', 'uses' => 'post']);
    });

    Route::controller('ForgotPasswordController')->group(function() {
        Route::get('/forgot', ['as' => 'forgot', 'uses' => 'index']);
        Route::post('/forgot', ['as' => 'forgot::post', 'uses' => 'post']);
    });
});