<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Enums\Role;
use App\Enums\Status;

use Closure;

class AdminLogined
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
        if (Auth::check())
        {
            if (Auth::user()->role == Role::Admin && Auth::user()->status == Status::Active)
            {

                return redirect()->route('admin_dashboard_index');
            }
        }

        return $next($request);
    }
}
