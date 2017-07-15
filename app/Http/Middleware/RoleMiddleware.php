<?php

namespace App\Http\Middleware;

use Auth; 
use Closure;

/**
 * Class RoleMiddleware 
 * 
 * If you building a project don't edit this file. Because this file will be verwritten.
 * When we are updated our project skeleton. ANd if you found an issue in this middleware. 
 * use the following links. 
 * 
 * @url https://github.com/CPSB/Skeleton-project
 * @url https://github.com/CPSB/Skeleton-project/issues
 */
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $role
     * @param  string $permission
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permission = null)
    {
        if (Auth::guest()) {
            return back(302); 
        }

        if (auth()->user()->hasRole($role)) {
            return $newt($request);
        }

        if (! is_null($permission)) {
            if (auth()->user()->can($permission)) {
                return $next($request);
            }
        }

        return abort(403);
    }
}
