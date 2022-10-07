<?php

namespace App\Http\Controllers\Stern\Servers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VirtualMachineController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return view("stern.pages.servers.vm");               
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
