<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //clase para autentificar en Laravel

class LoginController extends Controller
{
    //

    public function show(){

        if(Auth::check()){//valida su hay usuario con sesión autenticado
            return redirect('/home');//lo redirige a nuestra vista de Home
        }
        return view('auth.login');
    }

    public function login( LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){//Si no existen las credenciales o el usuario no está en la base de datos lo redirijimos a login
            return redirect()->to('/login')->withErrors('Sorry! Username and/or password is incorrect.');
        }
        $user=Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request,$user);

    }

    public function authenticated(Request $request, $user){
        return redirect('/home');
    }
}
