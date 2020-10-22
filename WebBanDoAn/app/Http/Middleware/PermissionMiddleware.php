<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PermissionMiddleware
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
        if (Auth::check()) {
            $listIdRoleOfUser = DB::table('role_user')->where('user_id',Auth::user()->id)->get()->pluck('role_id');
            $listRoleOfUser = DB::table('roles')->whereIn('id', $listIdRoleOfUser)->get()->pluck('name');
            if ($listRoleOfUser->contains('superadmin')) {
                return $next($request);
            }
            else{
                return redirect('home')->with('warning','bạn không phải là superadmin');
            }
        }else{
            return redirect('login')->with('warning','bạn chưa đăng nhập');
        }
    }
}
