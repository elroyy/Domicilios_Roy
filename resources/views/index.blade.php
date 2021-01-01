<!doctype html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/simple-sidebar.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>Roy M</title>
</head>

<body>

  {{-- <nav class="navbar navbar-light bg-light">
   <a class="navbar-brand" href="#">
          @yield('titulo')
   </a>
    </nav> --}}
  <div class="d-flex" id="wrapper">
    {{-- nuestro side-bar --}}

    <div class="bg-ligth border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><strong>Software Domiciliarios </strong></div>
      <div class="list-group list-group-flush">
        <a href="{{ route('index') }}" class="list-group-item list-group-item-action">Modelos</a>
        <a href="{{route('sucursals')}}" class="list-group-item list-group-item-action">Sucursales</a>
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

  <script src="/js/slim.min.js"></script>
  <script src="/js/popper.min.js"></script>
  <script src="/js/bootstrap.min.js"></script>

  <script>
    $("#menu-toggle").click(function(e){
        e.preventDefault();
      $("#wrapper").toggleClass("toggled");
       });
  </script>

</body>

</html>