<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}"> --}}
    <title>Document</title>
    <style>
        body{
            background-image: url(foto5.png);
        }
    </style>
</head>
<body>
    <h1>PÁGINA KNOWBUYSELL</h1>
    {{-- <h1>Bienvenido a la página princial</h1>
    <h3>Hola selecciona una de las opciones: Login ó Register</h3> --}}
    <div class="container">
        <div class="col-md-9 justify-content">
            {{-- Esta es la base de su aplicación, 
            debajo se colocará todo el contenido dinámico. --}}
            @yield('content')
        </div>
    </div>
 
    
</body>
</html>