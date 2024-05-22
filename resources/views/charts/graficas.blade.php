@extends('layouts.base')
{{-- <!DOCTYPE html>
<html>
<head>
    <title>Gráficos de Compras</title>
</head>
<body>
    <div style="width:75%;">
        {!! $chart->render() !!}
    </div>
</body>
</html> --}}
{{-- resources/views/graficas.blade.php --}}

@section('content')
<div style="width:75%;">
    {{-- {!! $chart->render() !!} --}}
    <div>{!! $chart->render() !!}</div>

</div>
@endsection