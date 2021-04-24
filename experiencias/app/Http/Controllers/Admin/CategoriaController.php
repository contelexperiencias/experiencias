<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Image;

class CategoriaController extends Controller
{
    public function index(){
        $categorias= Categoria::all();
        return view("admin.categorias.index",compact('categorias'));
    }
    public function create(){
        return view('admin.categorias.create');
    }
    public function store(Request $request){
        $categoria = new Categoria($request->all());
        
        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(1024,null,function($constraint){ $constraint->aspectRatio();  })
            ->save( public_path('/img/categoria/'.$nuevonombre));

            $categoria->urlfoto = $nuevonombre;
        }
        $categoria->slug    =   Str::slug($request->nombre);
        $categoria->save();
        return redirect('/admin/categoria');
    }
    public function update(Request $request,$id){
        $categoria = Categoria::findOrFail($id);//busca el registro por el ID, se instancia 
        $categoria->fill($request->all()); //rellenar con los nuevos datos
        $foto_anterior      = $categoria->urlfoto;
           
        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/categoria/'.$foto_anterior);
            if(file_exists($rutaAnterior)){unlink(realpath($rutaAnterior));}
            $image =$request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$image->guessExtension();
            Image::make($image->getRealPath())
            ->resize(1024,null,function($constraint){ $constraint->aspectRatio();  })
            ->save( public_path('/img/categoria/'.$nuevonombre));

            $categoria->urlfoto = $nuevonombre;
        }
        $categoria->save();
        return redirect('/admin/categoria');
    }
    public function edit($id){
        $categoria = Categoria::findOrFail($id);
        return view('admin.categorias.edit',compact('categoria'));
    }
    public function show($id){
        Session::put('categoria_id',$id);
        return redirect('/admin/producto');
    }
    public function destroy($id){
        $categoria = Categoria::findOrFail($id);
        $borrar = public_path('/img/categoria/'.$categoria->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }

        $categoria->delete();

        return redirect('/admin/categoria');
    }
}
