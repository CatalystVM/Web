<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use App\Models\User;

class LastSeenUserActivity {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next) {
        if (Auth::check()) {
            $expireTime = Carbon::now()->addMinute(1); // keep online for 1 min
            Cache::put('is_online'.Auth::user()->id, true, $expireTime);

            //Last Seen
            Auth::user()->last_seen = Carbon::now();
            Auth::user()->save();
        }
        return $next($request);
    }
}