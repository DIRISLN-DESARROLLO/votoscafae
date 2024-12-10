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
            // Validar entrada
            $request->validate([
                'dni' => 'required|numeric',
                'codigo_verificador' => 'required|string',
                'fecha_emision' => 'required|string',
            ]);

            // Buscar usuario basado en las credenciales
            $user = User::where('dni', $request->dni)
                ->where('codigo_verificador', $request->codigo_verificador)
                ->where('fecha_emision', $request->fecha_emision)
                ->first();

            if ($user) {
                // Login manual si es necesario
                Auth::login($user);

                return response()->json([
                    'message' => 'Inicio de sesión exitoso',
                    'user' => $user,
                    'estado' => true,
                    'dni' => $request->dni
                ]);
            } else {
                return response()->json([
                    'message' => 'Usuario no encontrado',
                    'estado' => false,
                    'dni' => $request->dni
                ], 404);
            }
        } catch (\Exception $exception) {
            return response()->json([
                'message' => 'Error del servidor: ' . $exception->getMessage(),
                'estado' => false,
                'dni' => $request->dni
            ], 500);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
