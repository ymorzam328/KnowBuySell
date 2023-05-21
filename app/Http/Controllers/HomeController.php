<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        // Auth::user()->id . Por ejemplo para saber el id del usuario que está ahora logeado. 
        //Pero lo vamos a hacer en otro sitio.Desde nuestra vista home(index)
        return view('home.index');
    }

//     public function index()
// {
//     $cookiesAceptadas = request()->cookie('cookies_aceptadas');

//     return view('welcome', compact('cookiesAceptadas'));
// }


    
}

