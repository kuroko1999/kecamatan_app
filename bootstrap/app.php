<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        
        // Daftar middleware global (dijalankan untuk semua request)
        $middleware->append([
            \App\Http\Middleware\SecurityHeaders::class,
            \App\Http\Middleware\BlockBadKeywords::class,
        ]);
        
        // Daftar middleware alias untuk route
        $middleware->alias([
            'admin.auth' => \App\Http\Middleware\AdminAuth::class,
        ]);
        
        // Tambahan: rate limiting untuk API (opsional)
        $middleware->throttleApi('api', '60,1');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        // Custom error handling
        $exceptions->render(function (Throwable $e, Request $request) {
            if ($e instanceof \Symfony\Component\HttpKernel\Exception\NotFoundHttpException) {
                return response()->view('errors.404', [], 404);
            }
            
            if ($e instanceof \Symfony\Component\HttpKernel\Exception\HttpException) {
                return response()->view('errors.' . $e->getStatusCode(), [], $e->getStatusCode());
            }
            
            return null;
        });
    })
    ->create();