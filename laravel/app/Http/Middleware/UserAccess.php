<?php
/** 
 * For creating this page,
 * Run this code in the terminal:
 * 
 * php artisan make:middleware UserAccess
 * 
 * note: its gonna create with default template. You're gonna make changes yourself.
 * */


namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $userType)
    {
        if(auth()->user()->type == $userType){
            return $next($request);
        }

        return response()->json(['You do not have permission to access for this page.']);
        /* or
        /* return response()->view('errors.check-permission'); */
    }

}
