<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curiosidad;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Image;

class CuriosidadController extends Controller
{
    public function index(){
        $curiosidades = Curiosidad::all();
        return view("admin.curiosidad.index",compact('curiosidades'));
    }
    public function create(){
        $categorias=Categoria::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.curiosidad.create', compact('categorias'));
    }
    public function store(Request $request){

        $curiosidad = new Curiosidad($request->all());
        
        if($request->hasFile('urlfoto')){

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(1143,256,function($constraint){ $constraint->aspectRatio();  })
            ->save( public_path('/img/curiosidad/'.$nuevonombre));

            $curiosidad->urlfoto = $nuevonombre;
        }
        $curiosidad->slug    =   Str::slug($request->nombre);
        $curiosidad->save();
        return redirect('/admin/curiosidad');

    }
    public function update(Request $request,$id){

        $curiosidad = Curiosidad::findOrFail($id);
        $curiosidad->fill($request->all());
        $foto_anterior     = $curiosidad->urlfoto;


        if($request->hasFile('urlfoto')){

            $rutaAnterior = public_path('/img/curiosidad/'.$foto_anterior);
            if(file_exists($rutaAnterior)){ unlink(realpath($rutaAnterior)); }

            $imagen = $request->file('urlfoto');
            $nuevonombre = Str::slug($request->nombre).'.'.$imagen->guessExtension();
            Image::make($imagen->getRealPath())
            ->resize(1143,256,function($constraint){ $constraint->aspectRatio();  })
            ->save( public_path('/img/curiosidad/'.$nuevonombre));

            $curiosidad->urlfoto = $nuevonombre;
        }
        $curiosidad->slug    =   Str::slug($request->nombre);
        $curiosidad->save();
        return redirect('/admin/curiosidad');
    }
    public function edit($id){
        $curiosidad = Curiosidad::findOrFail($id);
        $categorias=Categoria::orderBy('nombre','ASC')->pluck('nombre','id');
        return view('admin.curiosidad.edit',compact('curiosidad','categorias'));
    }

    public function destroy($id){
        $curiosidad = Curiosidad::findOrFail($id);
        $borrar = public_path('/img/curiosidad/'.$curiosidad->urlfoto);
        if(file_exists($borrar)){ unlink(realpath($borrar)); }
        $curiosidad->delete();
        return redirect('/admin/curiosidad');
    }
}
