<?php

namespace App\Http\Controllers\Stern;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Inertia\Inertia;

class UsersController extends Controller {
    
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        return Inertia::render('Stern/Users/Index', [
            'users' => User::query()/*->where(function($query) {
                    return $query->whereRelation('permissions', 'permission_id', '=', Permission::where('raw', 'stern.view')->first()->id);
                })*/
                ->when($request->input('search'), function($query, $search) {
                    return $query->where('email', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere(function($query) use ($search) {
                            $permission = Permission::where('raw', $search)->first();
                            if ($permission)
                                return $query->whereRelation('permissions', 'permission_id', '=', $permission->id);
                            return $query;
                        });
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
            'filters' => $request->only(['search', 'staff'])
        ]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request, User $user = null) {

    }
    
}
