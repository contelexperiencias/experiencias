<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;

class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        return view('welcome',compact('carrusel'));

       
    }
}
