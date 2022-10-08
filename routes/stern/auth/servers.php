<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Servers', 'as' => 'servers::', 'prefix' => 'servers'], function() {
    Route::controller('ApplicationsController')->group(function() {
        Route::get('/applications', ['as' => 'applications', 'uses' => 'index']);
    });

    Route::controller('VirtualMachineController')->group(function() {
        Route::get('/virtual', ['as' => 'virtual.machine', 'uses' => 'index']);
    });

    Route::controller('ComputeResourcesController')->group(function() {
        Route::get('/compute-resources', ['as' => 'compute.resources', 'uses' => 'index']);
    });
});