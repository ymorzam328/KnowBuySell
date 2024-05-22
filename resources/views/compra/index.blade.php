{{-- Para hereder el formato hemos incluído @extends y @section para incluir el contenido --}}

@extends('layouts.base') 
@section('content')
@role('admin')
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
    <a href="{{ route('compra.pdf') }}" class= "btn btn-primary btn-sm" data-placement="left" >  PDF </a>
    </div>
@endrole
{{-- @if(Auth::user()->id == 2 )
{{-- @if(Auth::user()) --}}
    {{-- <p>Conseguir meter sólo el usuario de consulta o usuario actual</p>
    <div>
       Mostrar compras del usuario 2
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
                        {{-- <a href="{{ url ('/compra/'.$compra->id.'/edit/')}}">Editar</a> 
                        
                        

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
    <a href="{{ route('compra.pdf') }}" class= "btn btn-primary btn-sm" data-placement="left" >  PDF </a>
    </div>
@endif

    <a href="{{ url('/home') }}">Ir a Home</a>
@endsection --}}

@auth
    <p>Estas son tus compras:</p>
    <div>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Categoría</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($compras->where('user_id', Auth::user()->id) as $compra)
                <tr>
                    <td>{{ $compra->id }}</td>
                    <td>{{ $compra->descripcionproducto }}</td>
                    <td>{{ $compra->cantidad }}</td>
                    <td>{{ $compra->precio }}</td>
                    <td>{{ $compra->categoria }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('compra.pdf') }}" class="btn btn-primary btn-sm" data-placement="left">PDF</a>
    </div>
@endif
<a href="{{ url('/home') }}">Ir a Home</a>
@endsection

