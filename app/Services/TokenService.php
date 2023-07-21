<?php

namespace App\Services;

use Illuminate\Http\Request;

class TokenService
{
    public function generateToken(Request $request, $user)
    {
        $tokens = $request->session()->get("tokens.$user", []);

        if (count($tokens) >= 10) {
            array_shift($tokens);
        }

        $token = bin2hex(random_bytes(16));
        $tokens[] = $token;
        $request->session()->put("tokens.$user", $tokens);

        return $tokens;
    }

    public function verifyToken(Request $request, $user, $token)
    {
        $tokens = $request->session()->get("tokens.$user", []);

        if (in_array($token, $tokens)) {
            $tokens = array_diff($tokens, [$token]);
            $request->session()->put("tokens.$user", $tokens);

            return true;
        }
        return false;
    }
}
