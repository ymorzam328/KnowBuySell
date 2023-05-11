{{-- Usamos herencia con extends --}}
@extends('layouts.base') 
@section('content')
<h1>Bienvenido a la página princial</h1>
<h3>Hola selecciona una de las opciones: Login ó Register</h3>
<br>
<a href="{{ url('/login') }}">Login</a>
<br>
<a href="{{ url('/register') }}">Register</a>
@endsection