<?php

namespace App\Http\Controllers\Stern\Servers\Compute;

use App\Http\Controllers\Controller;
use App\Models\Compute\Location;
use Illuminate\Http\Request;
use Inertia\Inertia;

class LocationController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return Inertia::render('Stern/Server/Compute/Location/Index', [
            'locations' => Location::query()
                ->when($request->input('s'), function($query, $search) {
                    return $query->where('city', 'like', "%{$search}%")
                        ->orWhere('country', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($location) => 
                    $location->only(['id', 'name', 'city', 'state', 'country', 'image'])
                ),
        ]);     
    }
    
}
