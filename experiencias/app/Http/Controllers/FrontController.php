<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Models\Producto;
use App\Models\categoria;
use App\Models\Destino;
use App\Models\RelacionProductoDestino;
class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('orden','asc')->get();
        $categorias = categoria::orderBy('orden','asc')->get();   
        $destinos =  Destino::orderBy('id','asc')->get();      
        $relacionProductoDestino = RelacionProductoDestino::join('destinos','destinos.id','=','relacion_producto_destinos.destino_id')->get(['relacion_producto_destinos.*','destinos.nombre']);
        return view('welcome',compact('carrusel','producto','categorias','destinos','relacionProductoDestino'));
       
    }
}
