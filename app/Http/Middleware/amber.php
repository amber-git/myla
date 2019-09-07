<?php
/**
 * Created by PhpStorm.
 * User: Amber
 * Date: 2019/9/7
 * Time: 23:20
 */

namespace App\Http\Middleware;
use Closure;

class amber {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->index != 'html') {
            return redirect('/admin/index/index');
        }

        return $next($request);
    }

}