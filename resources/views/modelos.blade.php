@extends('layouts.app')

@section('titulo')
<img src="../../img/biker.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
<label class="mx-sm-3"> Gestión modelos</label>
@endsection

@section('vista')
@if (session('estado'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>{{session('estado')}} </strong> exitosamente :v
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<form action="{{route('mode.guardar')}}" method="post" class="form-horizontal">
    @csrf
    {{-- @if ($errors->any())
                    <div class="col-md-12">
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $item)
                                    <li>{{$item}}</li>
    @endforeach
    </ul>
    </div>
    </div>

    @endif --}}
    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre"
                value="{{old('nombre')}}">
            @if ($errors->has('nombre'))
            <small class="form-text text-danger">{{ $errors->first('nombre')}}</small>
            @endif
        </div>

        <div class="form-group col-md-4">
            <label>Marca</label>
            <select class="form-control" name="id_marca">
                <option>Seleccione una marca</option>
                @foreach ($idmodelos as $objeto)
                <option value="{{$objeto->id}}">{{$objeto->nombre}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="modal-footer">
        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="ocultar()">Cerrar</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="mostrar()">Detalle</button> --}}
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</form>

{{-- Proceso para traer la tabla de la base de datosy mostrarla --}}

{{-- <div id="tabla" style="display: none"> --}}
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Id Marca</th>
            <th scope="col">Opciones</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($modelos as $objeto)
        <tr>

            <th scope="row">{{ $objeto->id }}</th>
            <th>{{ $objeto->nombre }}</th>
            <th>{{ $objeto->id_marca }}</th>
            <th>
                <a href="{{ route('mode.listar', $objeto->id) }}" class="btn btn-info bt-sm mx-sm-2"><i
                        class="material-icons md-18">edit</i></a>
                <form class="d-inline" action="{{route('mode.eliminar', $objeto->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger bt-sm"><i
                            class="material-icons md-18">delete</i></button>
                </form>
            </th>

        </tr>
        @endforeach

    </tbody>
</table>
{{-- </div>  --}}
{{$modelos->links()}}
@endsection

<script>
    function mostrar(){
        document.getElementById('tabla').style.display="flex";
    }
    function ocultar(){
        document.getElementById('tabla').style.display="none";
    }

</script>