<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <!-- Librerias JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Estilos Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="styleheet">
</head>
<body>


<nav class="navbar navbar-expand-lg bg-dark" id="sidebarMenu">
    <div class="container-fluid">
      <a class="nav-link"  href="{{ url('/')}}">Inicio</a>
      {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}
      <div class="collapse navbar-collapse" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{ url('/compras')}}">Compras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/departamentos')}}">Departamentos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/exportes')}}">Exportes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/ventas')}}">Ventas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/usuarios')}}">Usuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/perfil')}}">Información del usuario</a>
          </li>
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li> --}}
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
          <ul class="navbar-nav me-5 mb-2 mb-lg-0">
    @auth
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name ?? auth()->user()->username }}
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/logout">Logout</a></li>
        </ul>
      </li>
    @endauth
            
          
            <li class="nav-item">
              <a class="nav-link disabled"> </a>
            </li>
          </ul>
        </form>
      </div>
    </div>
  </nav>
</body>
</html>
{{-- _____________________________________ --}}

  {{-- <div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
        <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item p-3">
        <a class="nav-link" href="{{ url('/')}}">Inicio</a>
            </li>
        <li class="nav-item p-3">
           <a class="nav-link" href="{{ url('/compras')}}">Compras</a>  
        </li>
        <li class="nav-item p-3">
           <a class="nav-link" href="{{ url('/departamentos')}}">Departamentos</a>    
        </li>
        <li class="nav-item p-3">
           <a class="nav-link" href="{{ url('/exportes')}}">Exportes</a> 
        </li>
        <li class="nav-item p-3">
           <a class="nav-link" href="{{ url('/ventas')}}">Ventas</a> 
        </li>
        <li class="nav-item p-3">
           <a class="nav-link" href="{{ url('/usuarios')}}">Usuarios</a> 
        </li>
        <li class="nav-item p-3">
           <a class="nav-link" href="{{ url('/perfil')}}">Información del usuario</a> 
        </li>
        <li class="nav-item p-3">
           <a class="nav-link" href="#">Cerrar sesión</a> 
        </li>
        </ul>
        </div>

        </nav>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4"> --}}
        <!-- Contenido del contenedor de información -->
        <!-- <div class="d-flex justify-content-between flex-wrap p-3 mb-3"> -->
            <!-- <h1>Información adicional</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla fringilla enim in luctus eleifend. Curabitur consequat rutrum nunc vitae blandit. Donec auctor varius felis, et ullamcorper lacus tincidunt in.</p> -->
        <!-- </div> -->

        <!-- Contenido del bloque yield -->
        <!-- <div class="container"> -->
            {{-- <br>
            @yield('content') --}}
        <!-- </div> -->
    {{-- </main>
    </div>
</div> --}}
