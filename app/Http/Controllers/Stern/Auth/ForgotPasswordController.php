<?php

namespace App\Http\Controllers\Stern\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ForgotPasswordController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return Inertia::render('Stern/Auth/ForgotPassword/Index'); 
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request) {

    }
    
}
