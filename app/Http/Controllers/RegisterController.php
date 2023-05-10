<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show(){
        if(Auth::check()){//valida su hay usuario con sesión autenticado
            return redirect('/home');//lo redirige a nuestra vista de Home
        }
        return view('auth.register');
    }

    public function register(RegisterRequest $request){
        //varias formas de registrar el usuario. Recoger los datos del formulario cuando damos a submit y validarlos y guardarlos
        //Crear objeto para manipular la solicitud para este controlador. 
        
        $user=User::create($request->validated());//esto manda llamar a nuestras reglas. Valida que se apliquen las reglas
        return redirect('/login')->with('success', 'Account created successfully' );//para poder enviar un mensaje utilizamos el método with
    }
}
