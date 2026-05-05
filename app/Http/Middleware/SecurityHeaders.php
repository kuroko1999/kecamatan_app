<?php

namespace App\Http\Middleware;

use Closure;

class SecurityHeaders
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        
        // Cegah XSS
        $response->headers->set('X-XSS-Protection', '1; mode=block');
        
        // Cegah Clickjacking
        $response->headers->set('X-Frame-Options', 'DENY');
        
        // Cegah MIME sniffing
        $response->headers->set('X-Content-Type-Options', 'nosniff');
        
        // Content Security Policy - Cegah injeksi script
        $response->headers->set('Content-Security-Policy', 
            "default-src 'self'; " .
            "script-src 'self' 'unsafe-inline' https://cdn.tailwindcss.com https://cdnjs.cloudflare.com https://fonts.googleapis.com; " .
            "style-src 'self' 'unsafe-inline' https://fonts.googleapis.com; " .
            "font-src 'self' https://fonts.gstatic.com; " .
            "img-src 'self' data: https:;"
        );
        
        // HSTS - Force HTTPS
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains');
        
        // Referrer Policy
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');
        
        return $response;
    }
}