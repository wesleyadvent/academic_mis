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
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
<<<<<<< HEAD
           'role' => \App\Http\Middleware\UserRole::class,
=======
            'role'=>\App\Http\Middleware\UserRole::class,
>>>>>>> 876d035c3052ce7a6701772c361186dbfa2ca373
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
