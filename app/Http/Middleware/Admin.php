<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     */
 public function handle(Request $request, Closure $next)
{
    $user = $request->user();

    // Ha nincs bejelentkezve
    if (!$user) {
        return response()->json(['error' => 'Nincs bejelentkezve'], 401);
    }

    // Ha nem admin
    if ($user->jogosultsagi_szint !== 'admin') {
        return response()->json([
            'error' => 'Nincs jogosultság (nem admin)',
            'user' => $user,
        ], 403);
    }

    // Ha minden rendben, engedjük tovább
    return $next($request);
}


}
