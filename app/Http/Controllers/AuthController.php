<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only([
            'email', 'password'
        ]);
        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'msg' => 'Invalid email or password'
            ], 401);
        }
        $user = Auth::user();
        return response()->json([
            compact('token', 'user')
        ]);
    }
    public function logout()
    {
        Auth::logout();
        return response(null, 204);
    }
    public function register(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create($data);
        $token = Auth::login($user);
        return response()->json([
            compact('token', 'user')
        ]);
    }
}
