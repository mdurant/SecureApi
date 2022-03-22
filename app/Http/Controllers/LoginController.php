<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(!Auth::attempt($credentials)){
            return response([ //default status 200
               "message" => "Usuario y/o contraseña es inválido."
            ], 200);
        }
        $accessToken = Auth::user()->createToken('uroffToken123')->accessToken;

        return  response([
            "user" => Auth::user(),
            "access_token" => $accessToken
        ]);
    }
}
