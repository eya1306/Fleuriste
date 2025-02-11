<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ClientRegister extends Controller
{
    public function register(ClientRegisterRequest $request)

    {


        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone'=>$request->phone,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('client');

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Client registered successfully!',
            'user' => $user,
            'token' => $token
        ], 201);
    }
}
