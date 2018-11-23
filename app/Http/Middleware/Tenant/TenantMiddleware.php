<?php

namespace App\Http\Middleware\Tenant;

use Closure;
use App\Tenant\ManagerTenant;

class TenantMiddleware
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
        $managerTen = app(ManagerTenant::class);
        $tenant = $managerTen->tenant();

        if (!$tenant && $request->url() != route('tenant.404')) {
            return redirect()->route('tenant.404');
        }

        return $next($request);
    }
}
