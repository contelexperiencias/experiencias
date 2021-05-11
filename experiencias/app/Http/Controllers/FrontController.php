<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Models\Producto;
use App\Models\categoria;
use App\Models\Destino;
class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('orden','asc')->get();
        $categorias = categoria::orderBy('orden','asc')->get();   
        $destinos =  Destino::orderBy('id','asc')->get();      
        return view('welcome',compact('carrusel','producto','categorias','destinos'));
       
    }
}
