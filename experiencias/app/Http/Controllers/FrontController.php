<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;
use App\Models\producto;
use App\Models\categoria;
use App\Models\Destino;
use App\Models\RelacionProductoDestino;
use App\Models\Post;
use App\Models\Curiosidad;
class FrontController extends Controller
{
    public function index(){
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = producto::orderBy('orden','asc')->get();
        $categorias = categoria::orderBy('orden','asc')->get();   
        $destinos =  Destino::orderBy('id','asc')->get();     
        $posts = Post::orderBy('created_at','asc')->take(2)->get();  
        $relacionProductoDestino = RelacionProductoDestino::join('destinos','destinos.id','=','relacion_producto_destinos.destino_id')->get(['relacion_producto_destinos.*','destinos.nombre']);
        $curiosidad = Curiosidad::orderBy('created_at','asc')->take(1)->get();  
        return view('welcome',compact('carrusel','producto','categorias','destinos','relacionProductoDestino','posts','curiosidad'));
       
    }
    public function store(Request $request){
        $emails=$request->all();
        $mail = $_POST['email'];
        $message = "Hola deseo me hagan llegar sus promociones";
        $header = 'From: ' . $mail . " \r\n";
        $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
        $header .= "Mime-Version: 1.0 \r\n";
        $header .= "Content-Type: text/plain";
        $para = 'promociones@contelexperiencias.com,desarrolloweb@contelferraez.com';
        $asunto = 'email de contacto';

    mail($para, $asunto, utf8_decode($message), $header);

    return view('welcome');



    }
}
