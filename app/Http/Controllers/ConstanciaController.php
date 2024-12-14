<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Voto;
use App\Models\Lista;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ConstanciaController extends Controller
{
    public function generarConstanciaPdf()
    {
        try {
            $user = Auth::user();

            $voto = Voto::where('user_id', $user->id)
                ->first();
            if($voto){
                $lista =Lista::where('id',$voto->lista_id)
                    ->first();
                $pdf = Pdf::loadView('constancia.constancia', compact('user', 'lista', 'voto'));
                return $pdf->stream('constancia_voto_' . $voto->id . '.pdf');
            }else{
                return response()->json([
                    'success' => false,
                    'message' => 'Debes Votar primero'
                ], 200);
            }
        }catch (\Exception $exception){
            return response()->json([
                'success' => false,
                'message' => 'Ocurrió un problema al generar la contancia',
                'error' => $exception->getMessage()
            ], 500);
        }
    }
}
