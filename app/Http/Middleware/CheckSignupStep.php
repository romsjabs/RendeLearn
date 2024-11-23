<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckSignupStep
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Ensure Step 1 session data exists
        if (!Session::has('signup.step1')) {
            return redirect()->route('signup')->with('error', 'Please complete Step 1 first.');
        }

        // Optionally, check if the user has moved on to Step 2, and do not allow Step 1 again
        // (for example, if step2 session exists).
        if (Session::has('signup.step2')) {
            return redirect()->route('signup.complete');
        }

        return $next($request);
    }
}
