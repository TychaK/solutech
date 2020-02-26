<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);
        $validated['password'] = bcrypt($request->get('password'));
        $user = User::create($validated);
        $accessToken = $user->createToken('authenticationToken')->accessToken;
        return response(['user' => $user, 'token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($validated)) {
            // wrong credentials...
            return response()->json(['Invalid Login credentials'], 200);
        }
        // user successfully authenticated... generate the token for that user...
        $accessToken = auth()->user()->createToken('authenticationToken')->accessToken;
        return response(['user' => auth()->user(), 'token' => $accessToken]);
    }
}
