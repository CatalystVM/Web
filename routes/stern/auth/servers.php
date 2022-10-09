<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Servers', 'as' => 'servers::', 'prefix' => 'servers'], function() {
    Route::controller('ApplicationsController')->group(function() {
        Route::get('/applications', ['as' => 'applications', 'uses' => 'index']);
    });

    Route::group(['namespace' => 'Virtual', 'as' => 'virtual::', 'prefix' => 'virtual'], function() {
        Route::controller('ApplicationController')->group(function() {
            Route::get('/applications', ['as' => 'applications', 'uses' => 'index']);
        });

        Route::controller('NodeController')->group(function() {
            Route::get('/nodes', ['as' => 'nodes', 'uses' => 'index']);
        });
    });

    Route::controller('ComputeResourcesController')->group(function() {
        Route::get('/compute-resources', ['as' => 'compute.resources', 'uses' => 'index']);
    });
});