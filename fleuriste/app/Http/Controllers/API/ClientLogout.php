<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class ClientLogout extends Controller
{
    public function logout()
    {

        auth()->user()->tokens()->delete();

        return response()->json([
            'message' => 'logged out',
        ]);

    }
}
