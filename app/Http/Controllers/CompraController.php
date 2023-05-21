<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use App\Http\Controllers\VentaController;
use Illuminate\Support\Facades\DB;


class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos ['compras']=Compra::paginate(5);//va a coger los 5 primero registros
        return view('compra.index', $datos);//le damos al controlador la información de la vista
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $compra = new Compra(); // Crea una nueva instancia de Compra

        return view('compra.create', compact('compra'));
        // return view('compra.create');//le damos al controlador la información de la vista
        
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $datosCompra= request()->all();
        $datosCompra= request()->except('_token');
        Compra::insert($datosCompra);//insertamos los datos en la base de datos con este código
        // return response()->json($datosCompra);
        $id = DB::getPdo()->lastInsertId();

    return redirect()->route('compra.edit', $id)->with('success', 'Compra creada correctamente');
        //
    }

//     public function store(Request $request)
// {
//     $datosCompra = $request->except('_token');
//     Compra::insert($datosCompra);

//     // Obtener el ID del registro recién creado
//     $id = DB::getPdo()->lastInsertId();

//     return redirect()->route('compra.edit', $id)->with('success', 'Compra creada correctamente');
// }


    /**
     * Display the specified resource.
     */
    public function show(Compra $compra)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //para buscar el registro que necesitamos encontrar para editar
        $compra=Compra::findOrFail($id);
        //compact() sirve para pasar la información al formulario para que se muestre, para pasar todos los datos
        return view('compra.edit', compact('compra'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //coge todos los datos excepto el token y metho
        //después busca que el id coincida antes de realizar la modificación
        $datosCompra= request()->except(['_token', '_method']);
        Compra::where('id','=', $id)->update($datosCompra);

        $compra=Compra::findOrFail($id);
        //compact() sirve para pasar la información al formulario para que se muestre, 
        //para pasar todos los datos
        return view('compra.edit', compact('compra'));
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Compra::destroy($id); //destruye el registro con el id que le envío por parámetro
        return redirect('compra');
        //
    }
}
