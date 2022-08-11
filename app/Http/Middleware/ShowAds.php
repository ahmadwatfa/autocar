<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShowAds
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(Auth::user());

        if (Auth::user()) {
            if(Auth::user()->type_user == 0) {
                return $next($request);
            } elseif (Auth::user()->type_user != 0) {
                if ($request->ads_car->status != 1) {
                    if ($request->user()->id == $request->ads_car->user_id) {
                        return $next($request);
                    } else {
                        abort(403, 'Access denied');
                    }
                }
                else {
                    return $next($request);
                }
            }
        }
        elseif ($request->ads_car->status == 1) {
            return $next($request);
        }
        else {
            abort(403, 'Access denied');
        }
    }
}
