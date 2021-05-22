<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){
    // ruta de administracion
    
    Route::resource('/configuracion', App\Http\Controllers\Admin\ConfiguracionController::class);  
    Route::resource('/categoria', App\Http\Controllers\Admin\CategoriaController::class); 
    Route::resource('/producto', App\Http\Controllers\Admin\ProductoController::class);     
    Route::resource('/post', App\Http\Controllers\Admin\PostController::class);  
    Route::resource('/carrusel', App\Http\Controllers\Admin\CarruselController::class);
    Route::resource('/empresa', App\Http\Controllers\Admin\EmpresaController::class);    
    Route::resource('/destino', App\Http\Controllers\Admin\DestinoController::class); 
    Route::resource('/curiosidad', App\Http\Controllers\Admin\CuriosidadController::class);  
    Route::resource('/Email', App\Http\Controllers\Admin\EmailController::class);  

});
// rutas publicas

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/empresa', [App\Http\Controllers\FrontController::class, 'empresa']);
Route::get('/experiencias', [App\Http\Controllers\FrontController::class, 'experiencias']);
Route::get('/experiencias/{categoria}', [App\Http\Controllers\FrontController::class, 'categoria']);
Route::get('/experiencias/{categoria}/{producto}', [App\Http\Controllers\FrontController::class, 'producto']);
Route::get('/blog', [App\Http\Controllers\FrontController::class, 'blog']);
Route::get('/blog/{post}', [App\Http\Controllers\FrontController::class, 'post']);
Route::get('/contacto', [App\Http\Controllers\FrontController::class, 'contacto']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
