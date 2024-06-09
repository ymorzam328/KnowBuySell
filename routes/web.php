<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\CompraController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\ChartController;




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

// Route::get('/compra', function(){
//     return view ('compra.index');
// });

// Route::get('/home', [ChartController::class, 'graficas']);
// web.php





Route::get('/graficas', [ChartController::class, 'index']);

// Route::get('/graficas', [ChartController::class, 'index'])->middleware('auth');
// Route::get('compra/create', [CompraController::class, 'create']);//para acceder al método create del controlador 
Route::get('/compra/pdf', [App\Http\Controllers\CompraController::class, 'pdf'])-> name ('compra.pdf');
Route::resource('compra', CompraController::class);//para acceder a todos los métodos del controlador Y sustituye 
//a las dos rutas anteriores.

Route::get('/compras', function(){
    return view ('compras');
}); 

// Route::get('/compra.edit', function(){
//     return view ('compra.edit');
// }); 
Route::get('/aceptar-cookies', [CookieController::class, 'aceptarCookies'])->name('aceptar.cookies');
// Route::get('/set-cookie', [CookieController::class, 'setCookie']);
// Route::get('/get-cookie', [CookieController::class, 'getCookie']);

Route::get('/compra/{id}/edit', 'CompraController@edit')->name('compra.edit');


Route::get('/departamentos', function(){
    return view ('departamentos');
}); 

Route::get('/exportes', function(){
    return view ('exportes');
}); 

Route::get('/ventas', function(){
    return view ('ventas');
}); 


// Route::get('/usuarios', function(){
//     return view ('usuarios');
// }); 

Route::get('/usuarios', [RegisterController::class, 'showUsuarios'])->name('usuarios.index');

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
