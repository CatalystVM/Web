<?php

namespace App\Http\Controllers\Stern;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Inertia\Inertia
     */
    public function index(Request $request) {
        Auth::user()->RemovePermission(\App\Models\Permission::where('id', '97726b6a-8c0a-4b72-b7a1-41be450141d3')->first());
        dd(Auth::user()->permissions);
        
        return Inertia::render('Stern/Dashboard');
    }

}
