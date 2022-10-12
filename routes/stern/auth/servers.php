<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Servers', 'as' => 'servers::', 'prefix' => 'servers'], function() {
    Route::group(['namespace' => 'Virtual', 'as' => 'virtual::', 'prefix' => 'virtual'], function() {
        Route::controller('ApplicationController')->group(function() {
            Route::get('/applications', ['as' => 'applications', 'uses' => 'index']);
        });

        Route::controller('NodeController')->group(function() {
            Route::get('/nodes', ['as' => 'nodes', 'uses' => 'index']);
        });
    });

    Route::group(['as' => 'compute::', 'prefix' => 'compute-resources'], function() {
        Route::controller('ComputeNodeController')->group(function() {
            Route::get('/nodes', ['as' => 'nodes', 'uses' => 'index']);
        });
    });

    Route::group(['namespace' => 'Virtual', 'as' => 'virtual::', 'prefix' => 'virtual'], function() {
        Route::controller('NodeController')->group(function() {
            Route::get('/nodes', ['as' => 'nodes', 'uses' => 'index']);
        });

        Route::controller('ApplicationController')->group(function() {
            Route::get('/applications', ['as' => 'applications', 'uses' => 'index']);
        });

        Route::controller('ImageController')->group(function() {
            Route::get('/images', ['as' => 'images', 'uses' => 'index']);
        });
    });
});