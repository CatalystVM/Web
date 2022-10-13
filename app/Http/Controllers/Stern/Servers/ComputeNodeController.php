<?php

namespace App\Http\Controllers\Stern\Servers;

use App\Http\Controllers\Controller;
use App\Models\ComputeNode;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ComputeNodeController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return Inertia::render('Stern/Server/ComputeNode/Index', [
            'nodes' => ComputeNode::query()
                ->when($request->input('s'), function($query, $search) {
                    return $query->where('hostname', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($node) => [
                    'id' => $node->id,
                    'hostname' => $node->hostname,
                ]),
            'filters' => $request->only(['s'])
        ]);    
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request) {
        return Inertia::render('Stern/Server/ComputeNode/Add');
    }
    
}
