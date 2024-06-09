
@extends('layouts.base') 
@section('content')

<style>
    body{
         background-image: url(foto5.png);
     }
</style>

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<h1>Formulario</h1>
<br>
<br>
@csrf
<label for="Cantidad">Cantidad</label>
<input type="number" name="cantidad" value="{{$compra->cantidad}}" id="cantidad">
<br>
<br>
<label for="Precio">Precio</label>
<input type="number" name="precio" value="{{$compra->precio}}" id="precio">
<br>
<br>
<label for="user_id">User_id logado</label>
{{-- Ponemos el campo en oculto para que el usuario no se vea en el formulario y modificamos el usuario para que 
    se guarde de forma automática y coja el usuario logado--}}
{{-- <input type="hidden" name="user_id" value="{{$compra->user_id}}" id="user_id"> --}}
{{-- <input type="number" name="user_id" value="{{$compra->user_id}}" id="user_id"> --}}
{{-- Modificamos el meter el id de forma manual para que directamente lo coja del usuario logado --}}
<input type="hidden" name="user_id"  value="{{ Auth::id() }}" >
<br>
<br>
<label for="Categoria">Categoria</label>
<input type="text" name="categoria" value="{{$compra->categoria}}" id="categoria">
<br>
<br>
<label for="descripcionproducto">Producto</label>
<input type="text" name="descripcionproducto" value="{{$compra->descripcionproducto}}" id="descripcionproducto">
<br><br>
<input type="submit" value="Guardar datos">
<br><br>
@endsection

<!-- <h1>Formulario</h1>
<br>
<br>
<label for="Cantidad">Cantidad</label>
<input type="number" name="cantidad" value="{{$compra->cantidad}}" id="cantidad">
<br>
<br>
<label for="Precio">Precio</label>
<input type="text" name="precio" value="{{$compra->precio}}" id="precio">
<br>
<br>
<label for="user_id">User_id</label>
<input type="number" name="user_id" value="{{$compra->user_id}}" id="user_id">
<br>
<br>
<label for="Categoria">Categoria</label>
<input type="text" name="categoria" value="{{$compra->categoria}}" id="categoria">
<br>
<br>
{{-- <label for="Descripción del producto">Producto</label>
<input type="text" name="descripcionproducto" value="{{$compra->descripcionproducto}}" id="descripcionproducto">
<br><br> --}}
<label for="descripcionproducto">Producto</label>
<input type="text" name="descripcionproducto" value="{{$compra->descripcionproducto}}" id="descripcionproducto">
<br><br>
{{-- <input type="submit" name="Enviar"> --}}
<input type="submit" value="Guardar datos">
<br><br> -->



<a href="{{ url('/home') }}">Ir a Home</a>