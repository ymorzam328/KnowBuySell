{{-- Usamos herencia con extends --}}
@extends('layouts.base') 

@section('content')
    <h1>Bienvenido a la página principal</h1>
    <h3>Hola, selecciona una de las opciones: Login ó Register</h3>
    <br>
    <a href="{{ url('/login') }}">Login</a>
    <br>
    <a href="{{ url('/register') }}">Register</a>

    @php
        $cookiesAceptadas = request()->cookie('cookies_accepted');
    @endphp

    @if ($cookiesAceptadas)
        <!-- Mostrar contenido relacionado con las cookies aceptadas -->
        <div>
            Las cookies han sido aceptadas.
        </div>
    @else
        <!-- Mostrar contenido relacionado con las cookies no aceptadas -->
        <div id="cookies-overlay">
            <div id="cookies-popup">
                <p>Este sitio web utiliza cookies propias y de terceros para ofrecer 
                    un mejor servicio. </p><p>Puede obtener más información en nuestra página.
                    Debe aceptar para poder continuar.</p>
                <button onclick="acceptCookies()">Aceptar</button>
            </div>
        </div>

        <script>
            function acceptCookies() {
                document.cookie = "cookies_accepted=true; expires=Fri, 31 Dec 9999 23:59:59 GMT";
                document.getElementById("cookies-overlay").style.display = "none";
            }
        </script>

        <style>
            #cookies-overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                display: flex;
                justify-content: center;
                align-items: center;
            }

            #cookies-popup {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                text-align: center;
            }
        </style>
    @endif
@endsection
