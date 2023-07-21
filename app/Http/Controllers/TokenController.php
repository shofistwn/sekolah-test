<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TokenService;

class TokenController extends Controller
{
    protected $tokenService;

    public function __construct(TokenService $tokenService)
    {
        $this->tokenService = $tokenService;
    }

    public function generateToken(Request $request, $user)
    {
        $tokens = $this->tokenService->generateToken($request, $user);

        return response()->json([$user => $tokens]);
    }

    public function verifyToken(Request $request, $user, $token)
    {
        $isValid = $this->tokenService->verifyToken($request, $user, $token);

        return response()->json(['is_valid' => $isValid]);
    }
}
