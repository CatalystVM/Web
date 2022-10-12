<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'users'], function() {
    Route::controller('UsersController')->group(function() {
        Route::get('/', ['as' => 'users', 'uses' => 'index']);
    });
});

Route::group(['prefix' => 'user'], function() {
    Route::controller('UsersController')->group(function() {
        Route::get('/{user:id}', ['as' => 'user', 'uses' => 'search']);     
    });
});