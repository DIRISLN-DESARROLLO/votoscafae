<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\DataImport;

class ImportarController extends Controller
{
    public function index(){
        return view('admin.import.index');
    }
    public function importExcel(Request $request)
    {
        set_time_limit(0);

        $request->validate([
            'file' => 'required|mimes:xlsx,xls,csv',
        ]);

        try {
            Excel::import(new DataImport, $request->file('file'));
            return redirect()->back()->with('success', 'Archivo importado correctamente.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al importar el archivo: ' . $e->getMessage());
        }
    }

}
