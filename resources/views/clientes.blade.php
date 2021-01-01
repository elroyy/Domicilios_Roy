@extends('index')
@section('vista')
<h1>Gestion Clientes</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">cc</th>
      <th scope="col">nombre</th>
      <th scope="col">apellido</th>
      <th scope="col">dir</th>
      <th scope="col">tel</th>
    </tr>
  </thead>

  <tbody>

    @foreach ($datos as $objeto)
    <tr>

      <th scope="row">{{ $objeto->cc }}</th>
      <th>{{ $objeto->nombre }}</th>
      <th>{{ $objeto->apellido }}</th>
      <th>{{ $objeto->dir }}</th>
      <th>{{ $objeto->tel }}</th>

    </tr>
    @endforeach

  </tbody>
</table>
@endsection