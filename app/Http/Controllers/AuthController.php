<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        try {
            $credentials = $request->only('dni', 'codigo_verificador', 'fecha_emision');
            $user = User::where($credentials)->first();
            if ($user) {
               Auth::login($user);
                return response()->json([
                    'message' => 'Login successful',
                    'user' => $user,
                    'estado'=>true,
                    'dni'=> $request->dni
                    // 'token' => $token,
                ]);
            }else{
                return response()->json([
                    'message' => 'Usuario no encontrado',
                    'estado'=>false,
                    'dni'=> $request->dni
                    // 'token' => $token,
                ]);
            }
        }catch (\Exception $exception){
            return response()->json([
                'message' => 'Error del servidor: '.$exception->getMessage(),
                'estado'=>false,
                'dni'=> $request->dni
                // 'token' => $token,
            ],500);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
