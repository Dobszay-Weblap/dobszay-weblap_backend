<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);
        
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid login credentials'], 401);
        }
        
        $user = Auth::user()->load('csoportok'); // ⬇️ IDE KELL A ->load('csoportok')!
        $token = $user->createToken('auth_token')->plainTextToken;
        
        return response()->json([
            'token' => $token, // ⬇️ Változtasd 'token'-re az 'access_token' helyett
            'user' => $user, // Most már benne vannak a csoportok is!
            'status' => 'Login successful',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        $token = $request->user()->currentAccessToken();
        
        if ($token) {
            $token->delete();
        }

        return response()->json(['message' => 'Logout successful']);
    }
}