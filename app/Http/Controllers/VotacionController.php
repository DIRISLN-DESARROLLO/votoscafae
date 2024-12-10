<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use App\Models\Voto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class VotacionController extends Controller {
    public function show()
    {
        $listas = Lista::with('miembros')->get();
        return view('admin.listas.index', compact('listas'));
    }

    public function votar(Request $request)
    {
        try {
            $user = Auth::user();

            if (Voto::where('user_id', $user->id)->exists()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Ya has votado anteriormente.',
                ], 200);
            }

            $validatedData = $request->validate([
                'lista' => 'required|integer|exists:listas,id',
                'email' => 'required_if:checkEmail,true|email',
                'checkEmail' => 'nullable|boolean',
            ]);

            Voto::create([
                'user_id' => $user->id,
                'lista_id' => $validatedData['lista'],
                'hash_votacion' => hash('sha256', uniqid($user->id, true)),
            ]);

            // Lógica para verificar `checkEmail` y el campo `email`
            if (!empty($validatedData['checkEmail']) && $validatedData['checkEmail']) {
                // Si el checkbox está seleccionado y el email es válido
                // Aquí puedes implementar la lógica de envío de correo más adelante
            }

            return response()->json([
                'success' => true,
                'message' => 'Tu voto ha sido registrado exitosamente.',
            ], 200);
        } catch (\Exception $exception) {
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un problema al registrar tu voto. Inténtalo de nuevo más tarde.',
                'error' => $exception->getMessage(),
            ], 500);
        }
    }

    public function resultadosback()
    {
        $totalUsuarios = User::count();
        $totalVotos = Voto::count();
        $usuariosNoVotaron = $totalUsuarios - $totalVotos;
        $porcentajeNoVotaron = ($totalUsuarios > 0) ? ($usuariosNoVotaron / $totalUsuarios) * 100 : 0;
        $resultados = Voto::select('lista_id', DB::raw('COUNT(*) as votos'))
            ->groupBy('lista_id')
            ->with('lista')
            ->get();

        foreach ($resultados as $resultado) {
            $resultado->porcentaje = ($totalVotos > 0) ? ($resultado->votos / $totalVotos) * 100 : 0;
        }
        return view('admin.resultados.index', compact('resultados', 'totalUsuarios', 'totalVotos', 'usuariosNoVotaron', 'porcentajeNoVotaron'));
    }

    public function resultados()
    {
        $totalUsuarios = User::count();
        $totalVotos = Voto::count();

        $usuariosNoVotaron = $totalUsuarios - $totalVotos;
        $porcentajeNoVotaron = ($totalUsuarios > 0) ? ($usuariosNoVotaron / $totalUsuarios) * 100 : 0;

        $resultados = Voto::select('lista_id', DB::raw('COUNT(*) as votos'))
            ->groupBy('lista_id')
            ->with('lista')
            ->orderByDesc(DB::raw('COUNT(*)')) // Ordenar de mayor a menor por votos
            ->get();

        foreach ($resultados as $resultado) {
            $resultado->porcentaje = ($totalUsuarios > 0) ? ($resultado->votos / $totalUsuarios) * 100 : 0;
        }
        $ganador = $resultados->first();

        $listas = $resultados->pluck('lista.nombre')->toArray();
        $votos = $resultados->pluck('votos')->toArray();
        return view('admin.resultados.index', compact('resultados', 'totalUsuarios', 'totalVotos', 'usuariosNoVotaron', 'porcentajeNoVotaron', 'ganador', 'listas', 'votos'));
    }

}
