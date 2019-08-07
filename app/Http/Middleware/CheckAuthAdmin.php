<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Enums\Role;
use App\Enums\Status;

use Closure;

class CheckAuthAdmin
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
        if (Auth::check() && Auth::user()->role == Role::Admin && Auth::user()->status == Status::Active) 
        {
            return $next($request);
        }

        return redirect()->route('admin_login_index');
    }
}
