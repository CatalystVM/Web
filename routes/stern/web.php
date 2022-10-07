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

Route::group(['namespace' => 'Auth', 'as' => 'auth::', 'middleware' => ['guest']], 
    base_path('routes/stern/guest.php'));

Route::group(['middleware' => ['auth']], function() {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
    Route::get('/test', ['as' => 'test', 'uses' => 'DashboardController@index']);

    Route::get('/loggginAs/{user:id?}', function(\Illuminate\Http\Request $request, \App\Models\User $user = null) {
        if ($user) {
            \Illuminate\Support\Facades\Session::put( 'orig_user', Auth()->id() );
            \Illuminate\Support\Facades\Auth::login($user);

            return redirect()->intended(route('stern::dashboard'));
        }

        $id = \Illuminate\Support\Facades\Session::pull( 'orig_user' );
        $orig_user = \App\Models\User::find( $id );
        \Illuminate\Support\Facades\Auth::login( $orig_user );
        
        return redirect()->intended(route('stern::dashboard'));
    });

    Route::post('/logout', ['as' => 'auth::logout', 'uses' => 'Auth\LoginController@destory']);

    Route::group(['prefix' => 'users'], base_path('routes/stern/auth/users.php'));

    Route::group(['namespace' => 'Servers', 'as' => 'servers::', 'prefix' => 'servers'], function() {        
        Route::controller('VirtualMachineController')->group(function() {
            Route::get('/virtual', ['as' => 'virtual.machine', 'uses' => 'index']);
        });
    });
});

