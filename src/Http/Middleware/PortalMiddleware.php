<?php namespace Bantenprov\Portal\Http\Middleware;

use Closure;

/**
 * The PortalMiddleware class.
 *
 * @package Bantenprov\Portal
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class PortalMiddleware
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
        return $next($request);
    }
}
