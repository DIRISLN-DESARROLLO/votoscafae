<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('dni', 'codigo_verificador', 'fecha_emision');

        $user = User::where($credentials)->first();
      //  $token = $user->createToken('YourAppName')->plainTextToken;
        if ($user) {
            Auth::login($user);
             return response()->json([
                 'message' => 'Login successful',
                 'user' => $user,
                 'estado'=>true
                // 'token' => $token,
             ]);
        }

        return redirect()->back()->withErrors(['error' => 'Credenciales incorrectas']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
