<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
class ClienteController extends Controller
{
    //
    public function index(){
        $datos = Cliente::all();
        return view('clientes',compact('datos'));
    }
}