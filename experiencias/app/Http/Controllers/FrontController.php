<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Models\Producto;
class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = Producto::orderBy('orden','asc')->get();        
        return view('welcome',compact('carrusel','producto'));
       
    }
}
