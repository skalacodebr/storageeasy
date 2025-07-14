<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class CheckAdmin
{
    /**
     * Middleware para verificar se o usuário logado é um administrador.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Verifica se o usuário está autenticado
        if (!Auth::check()) {
            Log::warning('Tentativa de acesso a área administrativa sem autenticação');
            return redirect()->route('admin.login');
        }

        // Verifica se o usuário é um administrador
        $user = Auth::user();
        if (!$user || $user->admin != 1) {
            Log::warning('Tentativa de acesso a área administrativa por usuário não-admin', [
                'user_id' => $user ? $user->id : null,
                'admin' => $user ? $user->admin : null
            ]);
            Auth::logout();
            return redirect()->route('admin.login')->with('error', 'Acesso restrito a administradores.');
        }

        // Se for admin, permite o acesso
        return $next($request);
    }
}
