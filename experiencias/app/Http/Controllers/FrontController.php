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
use App\Models\Empresa;
use SEO;
use JsonLd;
use OpenGraph;
class FrontController extends Controller
{
    public function index(){
        SEO::setTitle('Contel experiencias');
        SEO::setDescription('Nuestro sitio para la aventura');
        SEO::opengraph()->setUrl('https://experiencias.contelferraez.com/');
        SEO::setCanonical('https://experiencias.contelferraez.com/');
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@experiencias');
        OpenGraph::addImage("https://experiencias.contelferraez.com/img/configuracion/contel-experiencias.jpg");
        $carrusel = Carrusel::orderBy('orden','asc')->get();
        $producto = producto::orderBy('orden','asc')->get();
        $categorias = categoria::orderBy('orden','asc')->take(7)->get(); 
        $categorias2 = categoria::orderBy('orden','desc')->take(6)->get();   
        $destinos =  Destino::orderBy('id','asc')->get();     
        $posts = Post::orderBy('created_at','asc')->take(2)->get();  
        $relacionProductoDestino = RelacionProductoDestino::join('destinos','destinos.id','=','relacion_producto_destinos.destino_id')->get(['relacion_producto_destinos.*','destinos.nombre']);
        $curiosidad = Curiosidad::orderBy('created_at','asc')->take(1)->get();  
        return view('welcome',compact('carrusel','producto','categorias','destinos','relacionProductoDestino','posts','curiosidad','categorias2'));
       
    }
    public function experiencias(){
        $categorias = categoria::all();
        return view('front.categorias',compact('categorias'));
    }
    public function categoria($categoria){
        $categoria = categoria::whereSlug($categoria)->first();
        return view('front.categoria',compact('categoria'));
    }
    public function producto($categoria,$producto){
        $producto = producto::whereSlug($producto)->first();
        SEO::setTitle($producto->title);
        JsonLd::addImage("https://experiencias.contelferraez.com/img/producto/{$producto->urlfoto}");       
        SEO::setDescription( $producto->description);
        SEO::opengraph()->setUrl("https://experiencias.contelferraez.com/experiencias/{$categoria}/{$producto->slug}");
        SEO::setCanonical("https://experiencias.contelferraez.com/experiencias/{$categoria}/{$producto->slug}");
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@contelexperiencias');
        OpenGraph::addImage("https://experiencias.contelferraez.com/img/producto/{$producto->urlfoto}");
        return view('front.producto',compact('producto'));
    }
    public function blog(){
        $posts = Post::all();
        return view('front.posts',compact('posts'));
    }

    public function post($post){
     
        $post = Post::whereSlug($post)->first();
        SEO::setTitle($post->title);
        JsonLd::addImage("https://experiencias.contelferraez.com/img/post/{$post->urlfoto}");       
        SEO::setDescription( $post->description);
        SEO::opengraph()->setUrl("https://experiencias.contelferraez.com/blog/{$post->slug}");
        SEO::setCanonical("https://experiencias.contelferraez.com/blog/{$post->slug}");
        SEO::opengraph()->addProperty('type', 'articles');
        SEO::twitter()->setSite('@contelexperiencias');
        OpenGraph::addImage("https://experiencias.contelferraez.com/img/post/{$post->urlfoto}");
        $post->increment('visitas');
        return view('front.post',compact('post'));
    }
    public function contacto(){
     
        return view('front.contacto');
    }

    public function contactoenvio(Request $r){
     if(!empty($r)){
         $nombre    = $_POST['nombre'];
         $email     = $_POST['email'];
         $mensaje   = $_POST['mensaje'];
         $para = 'desarrolloweb@contelferraez.com';
         
         if(mail($para,"ASUNTO CONTACTO ",utf8_decode($mensaje))){
            $resultado = "Gracias!!!. se envió tu mensaje";
         }else{
            $resultado = "No se pudo enviar tu mensaje";
         }
        return redirect()->back()->with('success',$resultado);
     }else{
         return redirect()->back()->with('success',"NO SE PUDO ENVIAR EL MENSAJE");
     }
    }
}
