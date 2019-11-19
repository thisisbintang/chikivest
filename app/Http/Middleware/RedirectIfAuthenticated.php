<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        switch ($guard) {
            case 'investor':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('investor.home');
                }
                break;
            case 'grazier':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('grazier.home');
                }
                break;
            case 'breeder':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('breeder.home');
                }
                break;
            case 'seller':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('seller.home');
                }
                break;
            default:
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('home');
                }
        }

        return $next($request);
    }
}
