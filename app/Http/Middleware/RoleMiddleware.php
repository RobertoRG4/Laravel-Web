<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if (!Auth::check()) {
            abort(403, 'Unauthorized');
        }

        $user = Auth::user();
        $userRole = $user->role->name ?? null;

        // Depuración temporal
        if (config('app.debug')) {
            logger("Usuario: {$user->email} | Rol en BD: '{$userRole}' | Rol requerido: '{$role}'");
        }

        if ($userRole !== $role) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
