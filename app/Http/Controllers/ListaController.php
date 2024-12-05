<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;

class ListaController
{
    public function index()
    {
        try {
            $data = Lista::all();
            return response()->json($data);
        }catch (\Exception $exception){
            return response()->json(['error' => $exception->getMessage()]);
        }
    }
    public function create()
    {

    }
    public function store(Request $request)
    {

    }
    public function show(Lista $lista)
    {

    }
    public function edit(Lista $lista)
    {

    }
    public function update(Request $request, Lista $lista)
    {

    }
    public function destroy(Lista $lista)
    {

    }
}
