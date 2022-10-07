<?php

use Illuminate\Support\Facades\Route;

Route::controller('UsersController')->group(function() {       
    Route::get('/', ['as' => 'users', 'uses' => 'index']);

    Route::get('/{user:id}', ['as' => 'user', 'uses' => 'index']);     
});