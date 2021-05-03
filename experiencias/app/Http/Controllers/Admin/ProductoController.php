<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Destino;
use App\Models\RelacionProductoDestino;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Image;
use Session;
class ProductoController extends Controller
{
     public function index(){
        if(!empty(Session::get('categoria_id'))){
            $destinos= Destino::get();
            $categorias= Categoria::whereid(Session::get('categoria_id'))->get();
            $productos = Producto::whereCategoria_id(Session::get('categoria_id'))->get();
           
            return view("admin.producto.index",compact('productos','categorias'));
        }
    }
    public function create(){
        $destinos= Destino::all();
        $categoria_id = Session::get('categoria_id');
        $categorias= Categoria::whereid(Session::get('categoria_id'))->get();
        return view("admin.producto.create",compact('categoria_id','categorias','destinos'));
       
    }
    public function store(Request $request){

        $producto = new Producto($request->all());
        
        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));

            $producto->urlfoto = $nuevonombre;
        }
        $producto->categoria_id     =   Session::get('categoria_id');
        $producto->slug    =   Str::slug($request->nombre);
        $producto->save();
        return redirect('/admin/producto');

    }
    public function update(Request $request,$id){
        $destinos= Destino::get();
        $producto = Producto::findOrFail($id);
        
        $producto->fill($request->all());
        $foto_anterior     = $producto->urlfoto;
        $producto->familia = $request->input('Familia') ==null ? 0 : 1;
        $producto->pareja = $request->input('Pareja') ==null ? 0 : 1;
        $producto->grupo = $request->input('Grupo') ==null ? 0 : 1;
        $producto->solo = $request->input('Solo')==null ? 0 : 1;
        $relProductoDestino = new RelacionProductoDestino;
        $relProductoDestinoNuevo = new RelacionProductoDestino;

        foreach($destinos as $dest){          
            $relProductoDestinoNuevo = Arr::add(['producto_id'=> 'destino_id'],$id , $request->input($dest->nombre));
            $relProductoDestino->producto_id =$id;
            $relProductoDestino->destino_id = $request->input($dest->nombre);
            if($request->input($dest->nombre) != null){
             $this->insertProdDest($relProductoDestino);

        }
            

        }
        // foreach($destinos as $dest){
           
        //         if ($dest->id == $request->input($dest->nombre)){
        //             $relProductoDestino = Arr::add(['producto_id'=> 'destino_id'],$id , $request->input($dest->nombre));
        //           }
        // }
        // for($i=0; $i< count($relProductoDestino); $i++){
           
        
        
        
        // $relProductoDestino[$i]->save();

        // }

  
     
    


        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $request->file('urlfoto');
            // Str::slug($request->nombre)
            $nuevonombre = 'producto_'.$request->nombre.'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));

            $producto->urlfoto = $nuevonombre;
        }
        $producto->slug    =   Str::slug($request->nombre);
        $producto->save();
       
        echo('{{$request}}');
        return redirect('/admin/producto');
    }

    public function insertProdDest(RelacionProductoDestino $relProductoDestino )
    {
        // foreach($relProductoDestinoNuevo as $dest){
        $relProductoDestino->save();
        // }

    }


    public function edit($id){
        $destinos= Destino::all();
        $producto = Producto::findOrFail($id);
        $categoria_id = Session::get('categoria_id');
        $categorias= Categoria::whereid(Session::get('categoria_id'))->get();
        $relProductoDestino = RelacionProductoDestino :: whereproducto_id($producto->id)->get();
        $activochk = 'checked';
        return view('admin.producto.edit',compact('producto','categoria_id','categorias','destinos','relProductoDestino','activochk'));
    }

    
    public function destroy($id){
        $producto = Producto::findOrFail($id);
        $borrar = public_path('/img/producto/'.$producto->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }

        $producto->delete();

        return redirect('/admin/producto');
    }
}
