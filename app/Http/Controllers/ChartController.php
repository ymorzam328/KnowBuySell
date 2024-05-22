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

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Support\Facades\Auth;

class ChartController extends Controller
{
    public function index()
    {
        // Obtener el usuario autenticado
        $user = Auth::user();

        // Obtener las compras del usuario autenticado
        $compras = Compra::where('user_id', $user->id)->get();

        // Crear un gráfico de barras para las compras del usuario autenticado
        $chart = Charts::database($compras, 'bar', 'chartjs')
            ->title("Tus Compras por Categoría")
            ->elementLabel("Total Compras")
            ->dimensions(1000, 500)
            ->responsive(false)
            ->groupBy('categoria');

        // Devolver la vista con el gráfico
        return view('graficas', compact('chart'));
    }
}


