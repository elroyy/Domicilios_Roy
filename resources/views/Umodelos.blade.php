@extends('layouts.app')

@section('titulo')
<img src="../../img/ico.png.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
<label class="mx-sm-3"> Editar modelos</label>
@endsection
@section('vista')
@if (session('estado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('estado')}} </strong>se actualizo exitosamente :v
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form action="{{route('mode.editar',$modelos->id)}}" method="post" class="form-horizontal">
    @method('PUT')
    @csrf

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre"
                value="{{$modelos->nombre}}">
            @if ($errors->has('nombre'))
            <small class="form-text text-danger">{{ $errors->first('nombre')}}</small>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label>Marca</label>
            <select class="form-control" name="id_marca">
                <option value="{{$modelos->id_marca}}">{{$modelos->id_marca}}</option>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <a href="{{route('index')}}" class="btn btn-secondary" data-dismiss="modal">Atrás</a>
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>
</form>
@endsection