<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Exceptions\MaintenanceModeException;
use Symfony\Component\HttpFoundation\Response;

class CheckForMaintenanceMode
{
    public function handle($request, Closure $next)
    {
        // Check if the application is in maintenance mode
        if (app()->isDownForMaintenance()) {
            // You can customize the response as needed
            return response()->view('errors.503', [], Response::HTTP_SERVICE_UNAVAILABLE);
        }

        return $next($request);
    }
}
