<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if(Auth::attempt($request)){

           $user = User::firstWhere('email', $request->email);
           $user->token = $user->createToken('auth_token')->plainTextToken;

           return $this->respondWithSuccess($user);
        }

        return $this->respondError('Wrong Email or Password');
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return $this->respondOk('Logout Success');
    }
}
