{{-- Usamos herencia con extends --}}
@extends('layouts.base') 

@section('content')

<style>
.contenedor{

    /* position: relative; */
    width: 1000px;
    height: 1000px;
    /* display: flex;
    justify-content: center;
    align-items: center; */
    position: absolute;
    top: 20%;
    left: 20%;

}

</style>
<div class="contenedor">
    <h1>Bienvenido a la página principal</h1>
    <br>
    <h3>Hola, selecciona una de las opciones: Login ó Register</h3>
    <br>
    <a href="{{ url('/login') }}">Login</a>
    <br>
    <a href="{{ url('/register') }}">Register</a>
    <br>
    <br>
    <br>
    <p> ZONA DE INSERCIÓN DE CONTENIDO PÚBLICO Y ACCESO SIN REGISTRO</p>
</div>  

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
            /* #cookies-overlay {
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
            } */
        
 
            /* h1, h3 {
    color: #333;
    margin: 0.5em 0;
}

a {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #007bff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s;
}

a:hover {
    background-color: #0056b3;
}

p {
    color: #666;
    margin-top: 2em;
}

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

button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 20px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #218838;
}  */

body {
   
}


body, html {     
                height: 100%; / Asegúrate de que el cuerpo y el html ocupen toda la altura /
                margin: 0;
                display: flex;
                flex-direction: column; / Organiza el contenido en una columna /
                justify-content: center; / Centra el contenido verticalmente /
                align-items: center; / Centra el contenido horizontalmente /
                text-align: center; / Centra el texto /
                background-color: #f4f4f4; / Color de fondo de tu elección /
            }

            h1 {
                color: #333;
                text-align: center;
                margin-bottom: 1em; / Espaciado debajo de los encabezados /
                               
            }
        
           


            a {
                display: block; / Cambiar a bloque para aplicar margen automático /
                margin: 0.5em auto; / Aplica un margen automático para centrar horizontalmente /
                padding: 10px 20px;
                background-color: #007bff;
                color: white;
                text-decoration: none;
                text-align: center;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            a:hover {
                background-color: #0056b3;
            }

            p {
                color: #666;
                margin: 2em 0;
            }

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

            button {
                background-color: #28a745;
                color: white;
                border: none;
                padding: 10px 20px;
                margin-top: 20px;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s;
            
            }

            button:hover {
                background-color: #218838;
            }
        
        </style>
    @endif
@endsection
