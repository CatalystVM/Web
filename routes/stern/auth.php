<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth' /*, 'can:permission,App\Models\User,"stern.view"' */]], function() {
    Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

    Route::get('/test', ['as' => 'test', 'uses' => 'DashboardController@index']);

    Route::get('/loginAs/{user:id?}', function(\Illuminate\Http\Request $request, \App\Models\User $user = null) {
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

    Route::group([], base_path('routes/stern/auth/users.php'));
    Route::group([], base_path('routes/stern/auth/servers.php'));
});;