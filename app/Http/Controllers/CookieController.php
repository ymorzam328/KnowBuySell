<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function aceptarCookies()
    {
        $cookie = cookie('cookies_aceptadas', true, 365 * 24 * 60); // Crear la cookie con una duración de 1 año
    
        return response('Cookies aceptadas')->withCookie($cookie);
    }
    
    // public function setCookie(Request $request)
    // {
    //     $response = new Response('Cookie set successfully');
    //     $response->cookie('example_cookie', 'value', 60); // Nombre, valor, duración en minutos

    //     return $response;
    // }

    // public function getCookie(Request $request)
    // {
    //     $value = $request->cookie('example_cookie');

    //     return $value ? $value : 'Cookie not found';
    // }
}

