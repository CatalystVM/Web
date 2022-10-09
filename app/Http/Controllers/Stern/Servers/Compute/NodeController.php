<?php

namespace App\Http\Controllers\Stern\Servers\Compute;

use App\Http\Controllers\Controller;
use App\Models\Compute\Node;
use App\Models\Compute\Location;
use App\Models\Compute\Plan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class NodeController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $nodes = Node::get();
        foreach ($nodes as $node) {
            $node->location;
            $node->location->plans;
        }
        //return $nodes;
        return Inertia::render('Stern/Server/Compute/Node/Index');          
    }
    
}
