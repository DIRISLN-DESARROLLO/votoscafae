<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use App\Models\Voto;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

}
