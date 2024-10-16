<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js']) 
    <title> @yield('titulo') </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{route('rutainicio')}}">Turista sin Maps</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

            <li class="nav-item active">
              <a class="nav-link {{ request()->routeIs('rutaform')?'text-warning':''}}" href="{{route('rutaform')}}">Registro de Clientes </span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('rutaclientes')?'text-success':''}}" href="{{route('rutaclientes')}}">Consultar clientes</a>
            </li>
          </ul>
        </nav>

        @yield('contenido')
        
</body>
</html>