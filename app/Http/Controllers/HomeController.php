<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public $fecha='2024-12-10T15:44:00';
    public $estado =false;

    public function index(){
       try{
            $estado= $this->verificar();
            $fecha = $this->fecha;
            $listas= Lista::all();
            $datos = Lista::with('miembros')->get();
            return view('home', compact('datos','listas','fecha','estado'));
       }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()]);
       }
    }

    public function verificar(){
        $hoy = now()->format('Y-m-d\TH:i:s');
        if($hoy >= $this->fecha ){
            return true;
        }
        return false;
    }



}
