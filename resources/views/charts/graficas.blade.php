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

{{-- @section('content')
<div style="width:75%;"> --}}
    {{-- {!! $chart->render() !!} --}}
    {{-- <div>{!! $chart->render() !!}</div>

</div>
@endsection --}}

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas por Usuario</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 600px; margin: auto;">
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        // Recuperar los datos pasados desde el controlador Laravel
        const chartData = @json($data);

        // Configurar el contexto del canvas para Chart.js
        const ctx = document.getElementById('salesChart').getContext('2d');

        // Crear el gráfico
        const salesChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico
            data: {
                labels: chartData.map(data => data.name), // Etiquetas del eje X
                datasets: [{
                    label: 'Total de Ventas por Usuario',
                    data: chartData.map(data => data.sales), // Datos del eje Y
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
</html> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 800px; margin: auto;">
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        // Recuperar los datos pasados desde el controlador Laravel
        const chartData = @json($data);

        // Configurar el contexto del canvas para Chart.js
        const ctx = document.getElementById('salesChart').getContext('2d');

        // Crear el gráfico
        const salesChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico
            data: {
                labels: Object.keys(chartData), // Nombres de usuario como etiquetas del eje X
                datasets: Object.values(chartData).map(data => ({
                    label: Object.keys(data)[0], // Nombre de la categoría como etiqueta
                    data: Object.values(data)[0], // Total de compras por categoría
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }))
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
<a href="{{ url('/home') }}">Ir a Home</a>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graficas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 800px; margin: auto;">
        <canvas id="salesChart"></canvas>
    </div>

    <script>
        // Recuperar los datos pasados desde el controlador Laravel
        const chartData = @json($data);

        // Configurar el contexto del canvas para Chart.js
        const ctx = document.getElementById('salesChart').getContext('2d');

        // Preparar los datos para el gráfico
        const labels = Object.keys(chartData);
        const datasets = [];

        // Iterar sobre cada usuario
        labels.forEach(user => {
            const userData = chartData[user];
            const categories = Object.keys(userData);
            const salesData = Object.values(userData);

            // Crear un conjunto de datos para cada usuario
            datasets.push({
                label: user,
                data: salesData,
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            });
        });

        // Crear el gráfico
        const salesChart = new Chart(ctx, {
            type: 'bar', // Tipo de gráfico
            data: {
                labels: categories, // Etiquetas del eje X (categorías)
                datasets: datasets // Conjuntos de datos (ventas por usuario)
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
</body>
</html> --}}
