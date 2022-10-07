<?php

namespace App\Http\Controllers\Stern\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Inertia\Inertia;

class LoginController extends Controller {
    
    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        return Inertia::render('Stern/Auth/Login/Index'); 
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 
                //Password::min(6)->mixedCase()->letters()->numbers()->uncompromised()
                Password::min(6)
            ],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('stern::dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destory(Request $request) {
        $id = \Illuminate\Support\Facades\Session::pull( 'orig_user' );
        if ($id) {
            $orig_user = User::find($id);
            Auth::login($orig_user);

            return redirect()->intended(route('stern::dashboard'));
        } 

        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    
        return to_route('stern::auth::login');
    }
    
}
