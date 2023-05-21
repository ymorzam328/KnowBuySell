Formulario de modificación de compras

{{-- <form action="{{ url ('/compra')}}" method="post"> --}}
<form action="{{ url ('/compra/'.$compra->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH')}}
    @include('compra.form')
    <a href="{{ url('/home') }}">Ir a Home</a>   
</form>