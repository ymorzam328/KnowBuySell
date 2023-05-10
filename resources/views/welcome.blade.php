{{-- Usamos herencia con extends --}}
@extends('layouts.base') 
@section('contenido')
<br>
<a href="{{ url('/login') }}">Login</a>
<br>
<a href="{{ url('/register') }}">Register</a>
@endsection