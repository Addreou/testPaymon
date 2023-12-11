<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $credentials = request(['email','password']);
        if(!Auth()->attempt($credentials))
        {
            return response()->json([
                'message' => 'Los datos no son correctos',
                'errors' => [
                    'password' => [
                        'Credenciales invalidas'
                    ]
                ],
            ],422);
        }

        $user = User::where([['email',$request->email],['deleted_at',null]])->first();
        $token = $user->createToken('auth-token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
        ]);
    }
}
