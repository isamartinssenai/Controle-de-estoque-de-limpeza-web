<?php

namespace App\Http\Middleware;

use App\Models\TokenUsuario;
use App\Models\Usuario;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class LogadoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->cookie('token_usuario');
        if (! $token) {
            return redirect('/login');
        }

        $tokenUsuario = TokenUsuario::where('token', $token)
            ->where('valido_ate', '>', now())
            ->first();

        if (! $tokenUsuario) {
            return redirect('/login')->withCookie(Cookie::forget('token_usuario'));
        }

        $usuario = Usuario::find($tokenUsuario->usuario_id);
        if (! $usuario) {
            return redirect('/login')->withCookie(Cookie::forget('token_usuario'));
        }

        $request->attributes->set('usuario', $usuario);

        return $next($request);
    }
}
