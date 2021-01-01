@extends('layouts.app')
@section('titulo')
<img src="../../img/house.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
<label class="mx-sm-3"> Gestión Sucursales</label>
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
<div class="form-inline">
  <div class="form-group mb-2">
    <label>Gestion Sucursales</label>
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Añadir dato
    </button>
  </div>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form action="{{route('sucu.guardar')}}" method="POST">
          @csrf
          <div class=" row form-group">
            <div class="col-sm col-lg-3">
              <label>Telefono</label>
            </div>
            <div class="col-sm">
              <input type="number" name="tel" class="form-control" placeholder="Ingrese el telefono">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm col-lg-3">
              <label>Direccion</label>
            </div>
            <div class="col-sm">
              <input type="text" name="dir" class="form-control" placeholder="Ingrese la direccion">
            </div>
          </div>

          <div class="row form-group">
            <div class="col-sm col-lg-3">
              <label>Nombre</label>
            </div>
            <div class="col-sm">
              <input type="text" name="nombre" class="form-control" placeholder="Ingrese el nombre">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Salir</button>
            <button type="submit" class="btn btn-primary">Salvar</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Telefono</th>
      <th scope="col">Dirección</th>
      <th scope="col">Nombre</th>
    </tr>
  </thead>

  <tbody>

    @foreach ($datos as $objeto)
    <tr>

      <th scope="row">{{ $objeto->id }}</th>
      <th>{{ $objeto->tel }}</th>
      <th>{{ $objeto->dir }}</th>
      <th>{{ $objeto->nombre }}</th>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection