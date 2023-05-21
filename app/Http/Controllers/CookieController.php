<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class CookieController extends Controller
{
    public function aceptarCookies()
    {
        $cookie = cookie('cookies_aceptadas', true, 365 * 24 * 60); // Crear la cookie con una duración de 1 año
    
        return response('Cookies aceptadas')->withCookie($cookie);
    }
    
}

