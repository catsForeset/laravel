<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        //判断session是否存在用户数据
        //如果存在访问后台，不存在请用户登录
        if(session('adminUserInfo')){
            return $next($request);
        }else{
            return redirect('/admin/login');
        }

    }
}
