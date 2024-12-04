<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use App\Models\Voto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VotacionController extends Controller
{
    public function show()
    {
        $listas = Lista::with('miembros')->get();
        return view('votacion.index', compact('listas'));
    }

    public function votar(Request $request)
    {
        $user = Auth::user();

        if (Voto::where('user_id', $user->id)->exists()) {
            return redirect()->back()->withErrors(['error' => 'Ya has votado.']);
        }

        foreach ($request->listas as $lista_id) {
            Voto::create(['user_id' => $user->id, 'lista_id' => $lista_id]);
        }

        return redirect()->route('resultados');
    }

    public function resultados()
    {
        $resultados = Voto::select('lista_id', \DB::raw('COUNT(*) as votos'))
            ->groupBy('lista_id')
            ->with('lista')
            ->get();

        return view('resultados.index', compact('resultados'));
    }

}
