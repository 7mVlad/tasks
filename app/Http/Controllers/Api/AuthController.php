<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class AuthController extends Controller
{
    public function registration(RegisterRequest $request)
    {
        $user = User::create([
            'email' => $request->get('email'),
            'password' => bcrypt($request->get('password')),
            'gender' => $request->get('gender'),
        ]);

        $token = $user->createToken('auth')->plainTextToken;

        return response()->json([
            'token' => $token,
        ]);
    }
}
