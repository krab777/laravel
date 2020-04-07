<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        // // dd($request->user()->role_id);
        // if (($request->user()->role_id ?? '') == $role) {
        //     return $next($request);
        // }else{
        //     return redirect()->route('homePage');   
        // }


        $roles = explode('|', $roles);

        if (auth()->check()) {
            $role = auth()->user()->role->name;
            if (array_search($role, $roles) !== false) {
                return $next($request);
            }
        }

        // dd($role);

        

        return redirect()->route('homePage');
    }
}
