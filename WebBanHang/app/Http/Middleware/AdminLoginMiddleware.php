<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
            if (Auth::user()->status == 1) {
                return $next($request);
            }
            else{
                return redirect('login')->with('thongbao','bạn không phải là admin');
            }
        }else{
            return redirect('login')->with('thongbao','bạn chưa đăng nhập');
        }
    }
}
