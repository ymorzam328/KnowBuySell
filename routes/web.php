<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/compras', function(){
    return view ('compras');
}); 

Route::get('/departamentos', function(){
    return view ('departamentos');
}); 

Route::get('/exportes', function(){
    return view ('exportes');
}); 

Route::get('/ventas', function(){
    return view ('ventas');
}); 

Route::get('/usuarios', function(){
    return view ('usuarios');
}); 

Route::get('/perfil', function(){
    return view ('perfil');
}); 

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register', [RegisterController::class,'show']);

Route::post('/register', [RegisterController::class,'register']);

Route::get('/login', [LoginController::class,'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class,'index']);

Route::get('/logout', [LogoutController::class,'logout']);

Route::get('/verificar-conexion', function () {
    try {
        DB::connection()->getPdo();
        return "Conexión exitosa";
    } catch (\Exception $e) {
        return "Error al conectar a la base de datos: " . $e->getMessage();
    }
});
