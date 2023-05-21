{{-- Para hereder el formato hemos incluído @extends y @section para incluir el contenido --}}

@extends('layouts.base') 
@section('content')
    <div>
        Aquí podrás ver las COMPRAS
        Mostrar la lista de compras :)

        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>User_id</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compras as $compra)
                
                <tr>
                    <td>{{ $compra->id}}</td>
                    <td>{{ $compra->user_id}}</td>
                    <td>{{ $compra->descripcionproducto}}</td>
                    <td>{{ $compra->cantidad}}</td>
                    <td>{{ $compra->precio}}</td>
                    <td>{{ $compra->categoria}}</td>
                    <td> 
                        {{-- Utilizamos la clase compra, enviamos los datos a $compra y la instrucción que 
                            utilizamos es edit --}}
                        <a href="{{ url ('/compra/'.$compra->id.'/edit/')}}">Editar</a> 
                        
                        

                        <form action="{{ url('/compra/'.$compra->id)}}" method="post">
                        @csrf 
                        {{ method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
    <a href="{{ url('/home') }}">Ir a Home</a>
@endsection
