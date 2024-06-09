Formulario de creación de compras
{{-- enctyper: permite fotos y archivos --}}
<form action="{{ url ('/compra')}}" method="post" enctype="multipart/form-data">
{{-- ponemos csrf para que larave nos responda cuando enviemos la información al método storage --}}
@csrf
@include('compra.form')
<a href="{{ url('/home') }}">Ir a Home</a>
</form>


