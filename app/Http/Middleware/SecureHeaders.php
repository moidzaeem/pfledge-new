<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecureHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


public function handle($request, Closure $next)
{
    $response = $next($request);

    // Content-Security-Policy aktualisieren, um alle Domains zu erlauben
    $csp = "frame-src 'self' https://pflegepur.de https://pflegepur.de/partner/pflegegradrechner https://pflegepur.de/partner/blog https://pflegepur.de/partner/blog/* https://pflegepur.de/partner/pflegegradrechner/calculate;
            frame-ancestors 'self' https://pflegeportal-hameln.de https://pflegeportal-hameln-pyrmont.de https://pflegeportal-pyrmont.de https://hameln-pyrmont.pflegepur.de;";

    $response->headers->set('Content-Security-Policy', $csp);

    return $response;
}








}

