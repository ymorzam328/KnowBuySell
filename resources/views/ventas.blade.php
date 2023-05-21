@extends('layouts.base')
@section('content') 
<h4>Ventas</h4>
<div>
<p>En esta sección puede ver las ventas de la aplicación.</p>
    <ul>
    <li>Ventas 1</li>
    <li>Ventas 2</li>
    <li>Ventas 3</li>
    </ul>
    <a href="{{ url('/home') }}">Ir a Home</a>
</div>

@endsection
