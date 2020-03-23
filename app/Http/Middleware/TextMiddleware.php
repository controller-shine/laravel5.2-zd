<?php

namespace App\Http\Middleware;

use Closure;

class TextMiddleware
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
		//记录当前请求的记录
		$path=$request->path();
		//将字符串路径存入到日志当中
		file_put_contents('request.log',$path."\r\n",FILE_APPEND);
		//进入下一层的
        return $next($request);
    }
}
