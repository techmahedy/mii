<?php

namespace App\Http;

class Kernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    public $middleware = [
        \App\Http\Middleware\FirstMiddleware::class,
        \App\Http\Middleware\SecondMiddleware::class,
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    public $routeMiddleware = [];
}