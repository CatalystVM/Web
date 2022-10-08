<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

Route::get('/b', function(\Illuminate\Http\Request $request) {
    event(new \App\Events\MyEvent('This is a test'));
});

Route::group([], base_path('routes/stern/guest.php'));
Route::group([], base_path('routes/stern/auth.php'));