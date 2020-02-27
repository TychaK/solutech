<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

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
        $accessToken = $user->createToken('authToken')->accessToken;
        \Session::put('accessToken', $accessToken);
        return redirect('/dashboard/orders');
    }

    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($validated)) {
            // wrong credentials...
            if ($request->get('_token')) {
                // on site authentication...
                return back()->withErrors("Invalid Login credentials");
            }
            return response()->json(['Invalid Login credentials'], 200);
        }
        // user successfully authenticated... generate the token for that user...
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        \Session::put('accessToken', $accessToken);
        return redirect('/dashboard/orders');
    }
}
