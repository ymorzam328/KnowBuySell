<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Compra;
// use ConsoleTVs\Charts\Facades\Charts;

// class ChartController extends Controller
// {
//     public function index()
//     {
//         // Obtener el usuario autenticado
//         $user = Auth::user();

//         // Obtener las compras del usuario autenticado
//         $compras = Compra::where('user_id', $user->id)->get();

//         // Crear un gráfico de barras para las compras del usuario autenticado
//         $chart = Charts::database($compras, 'bar', 'chartjs')
//             ->title("Tus Compras por Categoría")
//             ->elementLabel("Total Compras")
//             ->dimensions(1000, 500)
//             ->responsive(false)
//             ->groupBy('categoria');

//         // Devolver la vista con el gráfico
//         return view('graficas', compact('chart'));
//     }
// }

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Compra;
// use ConsoleTVs\Charts\Facades\Charts;
// use Illuminate\Support\Facades\Auth;

// class ChartController extends Controller
// {
//     public function index()
//     {
//         // Obtener el usuario autenticado
//         $user = Auth::user();

//         // Obtener las compras del usuario autenticado
//         $compras = Compra::where('user_id', $user->id)->get();

//         // Crear un gráfico de barras para las compras del usuario autenticado
//         $chart = Charts::database($compras, 'bar', 'chartjs')
//             ->title("Tus Compras por Categoría")
//             ->elementLabel("Total Compras")
//             ->dimensions(1000, 500)
//             ->responsive(false)
//             ->groupBy('categoria');

//         // Devolver la vista con el gráfico
//         return view('graficas', compact('chart'));
//     }
// }

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{

    public function index()
    {
        // Recuperar los datos de las compras agrupadas por usuario y categoría
        $comprasPorUsuarioYCategoria = Compra::select('user_id', 'categoria', DB::raw('SUM(cantidad) as total_compras'))
            ->groupBy('user_id', 'categoria')
            ->with('user') // Asegúrate de que el modelo Compra tenga una relación con User
            ->get();

        // Preparar los datos para el gráfico
        $data = [];

        foreach ($comprasPorUsuarioYCategoria as $compra) {
            $usuario = $compra->user->name;
            $categoria = $compra->categoria;
            $totalCompras = $compra->total_compras;

            // Almacenar los datos en un formato adecuado para el gráfico
            $data[$usuario][$categoria] = $totalCompras;
        }

        return view('charts.graficas', ['data' => $data]);
    }
    // public function index()
    // {
    //     // Recuperar los datos relevantes de la tabla de compras
    //     $comprasPorUsuario = Compra::select('user_id', DB::raw('SUM(cantidad) as total_compras'))
    //         ->groupBy('user_id')
    //         ->with('user') // Asegúrate de que el modelo Compra tenga una relación con User
    //         ->get();

    //     // Preparar los datos para el gráfico
    //     $data = $comprasPorUsuario->map(function($compra) {
    //         return [
    //             'name' => $compra->user->name, // Asume que el modelo User tiene un campo 'name'
    //             'sales' => $compra->total_compras
    //         ];
    //     });

    //     return view('charts.graficas', ['data' => $data]);
    // }

    
}

