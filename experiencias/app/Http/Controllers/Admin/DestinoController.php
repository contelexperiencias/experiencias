<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destino;
use Illuminate\Support\Str;
use Image;
use Session;

class DestinoController extends Controller
{
    public function index(){
        $destino= Destino::all();
        return view("admin.destino.index",compact('destino'));
    }
    public function create(){
        return view('admin.destino.create');
    }
    public function store(Request $request){
        $destino = new Destino($request->all());
    
        $destino->slug    =   Str::slug($request->nombre);
        $destino->save();
        return redirect('/admin/destino');
    }
    public function update(Request $request,$id){
        $destino = Destino::findOrFail($id);//busca el registro por el ID, se instancia 
        $destino->fill($request->all()); //rellenar con los nuevos datos
       
  
        $destino->save();
        return redirect('/admin/destino');
    }
    public function edit($id){
        $destino = Destino::findOrFail($id);
        return view('admin.destino.edit',compact('destino'));
    }
    public function show($id){
        Session::put('categoria_id',$id);
        return redirect('/admin/destino');
    }
    public function destroy($id){
        $destino = Destino::findOrFail($id);
        

        $destino->delete();

        return redirect('/admin/destino');
    }
}
