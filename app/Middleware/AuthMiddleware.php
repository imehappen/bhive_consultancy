<?php

declare(strict_types=1);

namespace App\Middleware;

use App\Core\Request;
use App\Core\Session;

class AuthMiddleware extends Middleware
{
    public function handle(Request $request, callable $next): void
    {
        if (!Session::has('user_id')) {
            header('Location: /login');
            exit;
        }

        $next($request);
    }
}
