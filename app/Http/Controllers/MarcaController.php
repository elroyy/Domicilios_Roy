<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{
    //
    public function getMarca(){
        $idmodelos = Marca::all();
        return view('modelos',compact('idmodelos'));
    }
}