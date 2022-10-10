<?php

namespace App\Http\Controllers\Stern\Servers\Compute;

use App\Http\Controllers\Controller;
use App\Models\Compute\Node;
use Illuminate\Http\Request;
use Inertia\Inertia;

use Illuminate\Support\Facades\Storage;

class NodeController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return Inertia::render('Stern/Server/Compute/Node/Index', [
            'nodes' => Node::query()
                ->when($request->input('s'), function($query, $search) {
                    return $query->where('hostname', 'like', "%{$search}%")
                        ->orWhere('solus_compute_id', $search);
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($node) => [
                    'id' => $node->id,
                    'hostname' => $node->hostname,
                    'image' => $node->location->image,
                    'location' => $node->location->only(['name', 'city', 'state', 'country'])
                ]),
            'filters' => $request->only(['s'])
        ]);    
    }
    
}
