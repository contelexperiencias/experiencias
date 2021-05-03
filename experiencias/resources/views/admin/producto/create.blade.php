@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
        
        <h4 class="text-center">NUEVO Producto para la Categoria: {{$categorias[0]->nombre}}</h4>
            <a href="{{route('producto.index')}}" class="btn-sm btn-success">Regresar</a>

            {!! Form::open(['route'=>['producto.store'],'method'=>'POST','files'=>true]) !!}
           

           
           
            <div class="jumbotron">
             <div class="form-group">
                <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>        
               

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE DEL PAQUETE</label>
                    {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div> 
                 <div class="form-group">
                    <label for="description">INGRESE DESCRIPTION</label>
                    {!! Form::textarea('description',null ,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>
                <div class="form-group" >
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',NULL ,['class'=>'form-control']) !!}
                </div>

                
                <div class="form-group">
                    <label for="nombre">INGRESE TARIFA</label>
                    {!! Form::text('tarifa',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div> 
                <div class=" row form-group col-sm-12">
              <div class="col-sm-6">
               <span class="anchor"><strong>DESTINOS</strong></span>
               @forelse ($destinos as $item)
               <ul class="items">
                    <li> {!! Form::checkbox($item->nombre, $item->id) !!}<label for="{{$item->nombre}}"> {{$item->nombre}}</label></li>                   
                </ul>                              
               @empty                       
               @endforelse 
              </div> 
              <div class="col-sm-6">
              <span class="anchor"><strong>¿Con Quién?</strong></span>
                <ul class="items">
                    <li> {!! Form::checkbox('Familia', '1') !!}<label for="Cancun"> En familia </label></li>
                    <li> {!! Form::checkbox('Pareja',  '1') !!}<label for="Riviera">En Pareja</label></li>
                    <li> {!! Form::checkbox('Grupo',  '1') !!}<label for="Tulum">Grupo</label></li>
                    <li> {!! Form::checkbox('Solo',  '1') !!}<label for="Holbox">Solo</label></li>
                   
                </ul> 
              </div>                           
            </div> 



                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/producto/foto.jpg">
                    {!! Form::file('urlfoto') !!}
                </div>

            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection