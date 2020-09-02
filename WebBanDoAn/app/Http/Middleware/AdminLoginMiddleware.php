<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminLoginMiddleware
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
            $listRoleofUser = DB::table('role_user')->where('user_id',Auth::user()->id)->first();
            if ($listRoleofUser != null) {
                return $next($request);
            }
            else{
                return redirect('home')->with('warning','bạn không phải là admin');
            }
        }else{
            return redirect('login')->with('warning','bạn chưa đăng nhập');
        }
    }
}
