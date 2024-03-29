<?php

namespace App\Http\Middleware;

use App\Models\AdsCar;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserAdsNumber
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
        $user = Auth::user();
        // check user if dealer (2) or showroom (3)
        if ($user->type_user == 3 || $user->type_user == 2) {
            if ($this->countAds(Auth::user()->id) > 100) {
                return redirect()->route('index')->with('message_error', 'عذراً تجاوزت الحد من المسموح من الإعلانات');
            }
        }
        // check user if normal user (1)
        elseif ($user->type_user == 1) {
            if ($this->countAds(Auth::user()->id) > 1) {
                return redirect()->route('index')->with('message_error', 'عذراً تجاوزت الحد من المسموح من الإعلانات');
            }
        }

        return $next($request);
    }

    public function countAds($id) {
        return AdsCar::where('user_id', $id)->get()->count();
    }
}
