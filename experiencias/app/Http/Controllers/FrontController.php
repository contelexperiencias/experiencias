<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Models\Producto;
use App\Models\categoria;
use App\Models\Destino;
use App\Models\RelacionProductoDestino;
use App\Models\Post;
use App\Models\Curiosidad;
class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('orden','asc')->get();
        $categorias = categoria::orderBy('orden','asc')->get();   
        $destinos =  Destino::orderBy('id','asc')->get();     
        $posts = Post::orderBy('created_at','asc')->take(2)->get();  
        $relacionProductoDestino = RelacionProductoDestino::join('destinos','destinos.id','=','relacion_producto_destinos.destino_id')->get(['relacion_producto_destinos.*','destinos.nombre']);
        $curiosidad = Curiosidad::orderBy('created_at','asc')->take(1)->get();  
        return view('welcome',compact('carrusel','producto','categorias','destinos','relacionProductoDestino','posts','curiosidad'));
       
    }
}
