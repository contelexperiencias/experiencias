<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\producto;
use App\Models\categoria;
use App\Models\Destino;
use App\Models\RelacionProductoDestino;
use App\Models\RelacionProductoCategoria;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Image;
use Session;
class ProductoController extends Controller
{
     public function index(){
        if(!empty(Session::get('categoria_id'))){
            $destinos= Destino::get();
            $categorias= categoria::whereid(Session::get('categoria_id'))->get();
            $productos = producto::whereCategoria_id(Session::get('categoria_id'))->get();
            $relacionProductoCategoria = RelacionProductoCategoria::join('productos','productos.id','=','relacion_producto_categorias.producto_id')->where('relacion_producto_categorias.categoria_id','=',Session::get('categoria_id'))->get(['productos.*']);
            return view("admin.producto.index",compact('productos','categorias','relacionProductoCategoria'));
        }
    }
    public function create(){
        $destinos= Destino::all();
        $categoriasAll = categoria::all();
        $categoria_id = Session::get('categoria_id');
        $categorias= categoria::whereid(Session::get('categoria_id'))->get();
        return view("admin.producto.create",compact('categoria_id','categorias','destinos','categoriasAll'));
       
    }
    public function store(Request $request){
        $destinos= Destino::get();
        $producto = new producto($request->all());   
     
        if($request->hasFile('urlfoto')){
            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto = $nuevonombre;
        }
        if($request->hasFile('urlfoto2')){
            $imagen = $request->file('urlfoto2');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto2 = $nuevonombre;
        }
        if($request->hasFile('urlfoto3')){
            $imagen = $request->file('urlfoto3');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto3 = $nuevonombre;
        }
        if($request->hasFile('urlfoto4')){
            $imagen = $request->file('urlfoto4');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto4 = $nuevonombre;
        }
        if($request->hasFile('urlfoto5')){
            $imagen = $request->file('urlfoto5');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto5 = $nuevonombre;
        }
        $producto->categoria_id     =   Session::get('categoria_id');
        $producto->slug    =   Str::slug($request->nombre);     
        $producto->familia = $request->input('Familia') ==null ? 0 : 1;
        $producto->pareja = $request->input('Pareja') ==null ? 0 : 1;
        $producto->grupo = $request->input('Grupo') ==null ? 0 : 1;
        $producto->solo = $request->input('Solo')==null ? 0 : 1;        
        $producto->save();
        $this->createrelacionCategoria($request);
        $this->createrelacion($request);
       
        return redirect('/admin/producto');

    }
    public function createrelacionCategoria(Request $request){
        $categorias =categoria::get();
        $id = producto::all()->last();
        echo $id->id;
       echo  $request->nombre;
        $longitud  = $categorias->count();
        for($i=0; $i<$longitud; $i++)
        {
            
            if( $request->input($categorias[$i]->slug) == $categorias[$i]->id)
            {
                $relProductoCategoria = new RelacionProductoCategoria;
                $relProductoCategoria->producto_id =$id->id;
                $relProductoCategoria->categoria_id = $request->input($categorias[$i]->slug);
                $relProductoCategoria->save();           
              echo $relProductoCategoria;
            }     
        }
        return redirect('/admin/producto');

    }

    public function createrelacion(Request $request){
        $destinos= Destino::get();
        $id = producto::all()->last();
       
       
        echo $id->id;
       echo  $request->nombre;
       echo $request->input('cancun');
         // $id = Producto :: whereslug($producto->slug)->wherecategoria_id($producto->categoria_id )->first();
         $longitud  = $destinos->count();
         for($i=0; $i<$longitud; $i++)
         {
             
             if( $request->input($destinos[$i]->slug) == $destinos[$i]->id)
             {
                 $relProductoDestino = new RelacionProductoDestino;
                 $relProductoDestino->producto_id =$id->id;
                 $relProductoDestino->destino_id = $request->input($destinos[$i]->slug);
                 $relProductoDestino->save();           
               echo $relProductoDestino;
             }     
         }
    
         return redirect('/admin/producto');

    }
    public function update(Request $request,$id){
        $destinos= Destino::get();
        $categorias=categoria::get();
        $producto = producto::findOrFail($id);        
        $producto->fill($request->all());
        $foto_anterior     = $producto->urlfoto;
        $producto->familia = $request->input('Familia') ==null ? 0 : 1;
        $producto->pareja = $request->input('Pareja') ==null ? 0 : 1;
        $producto->grupo = $request->input('Grupo') ==null ? 0 : 1;
        $producto->solo = $request->input('Solo')==null ? 0 : 1;      
        $getRelProductoDestino = RelacionProductoDestino::whereproducto_id($id)->delete();
        $getRelProductoCategoria = RelacionProductoCategoria::whereproducto_id($id)->delete();
        $longitud  = $destinos->count();
        $longitudCategorias  = $categorias->count();
        for($i=0; $i<$longitud; $i++)
        {
            
            if( $request->input($destinos[$i]->slug) == $destinos[$i]->id)
            {
                $relProductoDestino = new RelacionProductoDestino;
                $relProductoDestino->producto_id =$id;
                $relProductoDestino->destino_id = $request->input($destinos[$i]->slug);
                $relProductoDestino->save();           
              
            }     
        }
        for($i=0; $i<$longitudCategorias; $i++)
        {
            
            if( $request->input($categorias[$i]->slug) == $categorias[$i]->id)
            {
                $relProductoCategoria = new RelacionProductoCategoria;
                $relProductoCategoria->producto_id =$id;
                $relProductoCategoria->categoria_id = $request->input($categorias[$i]->slug);
                $relProductoCategoria->save();           
              
            }     
        }
         
        if($request->hasFile('urlfoto'))
        {
            $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            $imagen = $request->file('urlfoto');            
            $nuevonombre = 'producto_'.$request->nombre.'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto = $nuevonombre;
        }
        if($request->hasFile('urlfoto2'))
        {
            $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            $imagen = $request->file('urlfoto2');            
            $nuevonombre = 'producto_'.$request->nombre.'2.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto2 = $nuevonombre;
        }
        if($request->hasFile('urlfoto3'))
        {
            $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            $imagen = $request->file('urlfoto3');            
            $nuevonombre = 'producto_'.$request->nombre.'3.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto3 = $nuevonombre;
        }
        if($request->hasFile('urlfoto4'))
        {
            $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            $imagen = $request->file('urlfoto4');            
            $nuevonombre = 'producto_'.$request->nombre.'4.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto4 = $nuevonombre;
        }
        if($request->hasFile('urlfoto5'))
        {
            $rutaAnterior = public_path('/img/producto/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }
            $imagen = $request->file('urlfoto5');            
            $nuevonombre = 'producto_'.$request->nombre.'5.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->fit(1200,800,function($constraint){ $constraint->upsize();  })
            ->save( public_path('/img/producto/'.$nuevonombre));
            $producto->urlfoto5 = $nuevonombre;
        }
        
        $producto->slug    =   Str::slug($request->nombre);
        $producto->save();       
        // echo('{{$request}}');
        return redirect('/admin/producto');
    }
    public function edit($id){
        $destinos= Destino::all();
        $producto = producto::findOrFail($id);
        $categoria_id = Session::get('categoria_id');
        $categoriasAll = categoria::all();
        $categorias= categoria::whereid(Session::get('categoria_id'))->get();
        $relProductoDestino = RelacionProductoDestino :: whereproducto_id($producto->id)->get();
        $relProductoCategoria = RelacionProductoCategoria :: whereproducto_id($producto->id)->get();
        $activochk = 'checked';
        return view('admin.producto.edit',compact('producto','categoria_id','categorias','destinos','relProductoDestino','activochk','categoriasAll','relProductoCategoria'));
    }

    public function destroyRelacion( $RelacionProductoDestino){

        $RelacionProductoDestino = RelacionProductoDestino:: get($RelacionProductoDestino);
        $RelacionProductoDestino->delete();

    }
    public function destroy($id){
        $getRelProductoDestino = RelacionProductoDestino::whereproducto_id($id)->delete();
        $getRelProductoCategoria = RelacionProductoCategoria::whereproducto_id($id)->delete();
        
        $producto = producto::findOrFail($id);
        $borrar = public_path('/img/producto/'.$producto->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }
        $producto->delete();
        return redirect('/admin/producto');
    }
}
