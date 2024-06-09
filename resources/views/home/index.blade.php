
@extends('layouts.app-master')

@section('content')

<style>
.bienvenida{

    /* position: relative; */
    width: 1000px;
    height: 1000px;
    /* display: flex;
    justify-content: center;
    align-items: center; */
    position: absolute;
    top: 35%;
    left: 35%;

}
</style>

    <div class="bienvenida">
    <h1 class="container">Home</h1>

    @auth
        {{-- Si name es indefinido o nulo va a mostrar lo que hay a la derecha de la interrogación 
    Si name tiene un valor asignado, lo mostrará --}}
        <p>Bienvenid@ {{ auth()->user()->name ?? auth()->user()->username }}, estás logead@ en la página </p>
        <p>
            <a href="/logout">Logout</a>
        </p>
    @endauth
   

    @role('admin')
    <p>CONTENIDO ADMINISTRADOR</p>
    @endrole
</div>
    @guest
        <p>Para ver el contenido <a href="/login">inicia sesión</a> </p>
    @endguest
@endsection
