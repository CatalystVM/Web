<?php

namespace App\Http\Controllers\Stern;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user = null) {
        if ($user) {
            //return view("stern.pages.account")->with('account', $user);
        }

        return Inertia::render('Stern/Users/Index', [
            'users' => User::query()
                ->when($request->input('s'), function($query, $search) {
                    return $query->where('email', 'like', "%{$search}%")->orWhere('name', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn($user) => [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    'profile_img' => $user->GetProfileImage(),
                    'online' => cache()->has('is_online' . $user->id)
                ]),
            'filters' => $request->only(['s'])
        ]);
    }
    
}
