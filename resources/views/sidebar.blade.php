<div class="d-flex" id="wrapper">
  {{-- nuestro side-bar --}}

  <div class="bg-ligth border-right" id="sidebar-wrapper">
    <div class="sidebar-heading"><strong>Software Domiciliarios </strong></div>
    <div class="list-group list-group-flush">
      <a href="{{ route('index') }}" class="list-group-item list-group-item-action"><i
          class="material-icons md-18 align-top">directions_car</i>Modelos</a>
      <a href="{{route('sucursals')}}" class="list-group-item list-group-item-action"><i
          class="material-icons md-18 align-top">house_siding</i>Sucursales</a>
    </div>
  </div>

  {{-- contenido de la pagina --}}
  <div id="page-content-wrapper">
    <nav class="navbar navbar-light bg-light navbar-expand-lg border-botton">
      <button class="btn btn-primary mx-sm-2" id="menu-toggle">
        < </button> <a class="navbar-brand" href="#">
          @yield('titulo')
          </a>
    </nav>
    <div class="container-fluid">
      @yield('vista')
    </div>
  </div>
</div>

<script>
  $("#menu-toggle").click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
        });
</script>