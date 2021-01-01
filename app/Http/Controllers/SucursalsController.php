<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sucursal;

class SucursalsController extends Controller
{
    //
    public function index(){
        $datos = Sucursal::all();
        return view('Sucursals',compact('datos'));
    }

    public function guardar(Request $request){
        
        $dato = new Sucursal;
        $dato->tel=$request->tel;
        $dato->dir=$request->dir;
        $dato->nombre=$request->nombre;
        $dato->save();
        return back()->with('estado','La sucursal  '.$request->nombre);
    }
}