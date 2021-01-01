<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidarGuardarRequest;
use Illuminate\Http\Request;
use App\Modelo;
use App\Marca;

class ModeloController extends Controller
{
    //
    public function index(){
        $modelos = Modelo::paginate(4);
        $idmodelos = Marca::all();
        return view('modelos',compact('modelos','idmodelos'));
    }

    public function guardar(ValidarGuardarRequest $request){
        
        $modelos = new Modelo;
        $modelos->nombre=$request->nombre;
        $modelos->id_marca=$request->id_marca;
        $modelos->save();
        return back()->with('estado','Su registro '.$request->nombre);
    }
    public function editar(ValidarGuardarRequest $request,$id){
        
        $modelos = Modelo::findOrFail($id);
        $modelos->nombre=$request->nombre;
        $modelos->id_marca=$request->id_marca;
        $modelos->save();
        return back()->with('estado','Su registro  '.$request->nombre);
    }
    
    public function eliminar($id){
        $modelos = Modelo::findOrFail($id);  
        $modelos->delete();
        return back()->with('estado','Su registro se elimino');
    }
    
    public function listar($id){
        $modelos = Modelo::findOrFail($id);

        return view('Umodelos', compact('modelos'));
        
    }
}