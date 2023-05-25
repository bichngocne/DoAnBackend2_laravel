<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if (!auth()->check()) {
            return redirect()->route('showLogin'); // Chuyển hướng đến trang đăng nhập
        }
    
        // Kiểm tra vai trò của người dùng (nếu có)
        if (!Auth::user()->phanquyen == 'admin') {
            return abort(403, 'Access denied'); // Ngăn chặn truy cập nếu không phải admin
        }
    
        return $next($request);
    }
}
