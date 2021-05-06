@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
            {!! Form::open(['route'=>['carrusel.update',$carrusel],'method'=>'PUT','files'=>true]) !!}
            <div class="jumbotron"> 
            <div class="form-group">
                    <label for="encabezado">INGRESE ENCABEZADO</label>
                    {!! Form::text('encabezado',$carrusel->encabezado,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>  
                <div class="form-group">
                    <label for="subencabezado">INGRESE SUBENCABEZADO</label>
                    {!! Form::text('subencabezado',$carrusel->subencabezado,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>  

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/carrusel/{{$carrusel->urlfoto}}">
                    {!! Form::file('urlfoto') !!}
                </div>

        <div class="row">
             <div class="col-sm-4">
                <div class="form-group ">
                    <label for="title">INGRESE TITLE 1</label>
                    {!! Form::text('title',$carrusel->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>         
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN 1</label>
                    {!! Form::text('descripcion',$carrusel->descripcion,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK 1</label>
                    {!! Form::text('link',$carrusel->link ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto1">IMAGEN PRIMER POST</label> <br>
                    <img src="/img/carrusel/{{$carrusel->urlfoto1}}" class="mx-auto d-block w-50   fluid rounded-circle thumbnail"  style="image-rendering: pixelated; border:white 3px solid;" >
                    {!! Form::file('urlfoto1') !!}
                </div>
             </div>
             <div class="col-sm-4">
                <div class="form-group">
                    <label for="title">INGRESE TITLE 2</label>
                    {!! Form::text('title2',$carrusel->title2,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>         
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN 2</label>
                    {!! Form::text('descripcion2',$carrusel->descripcion2,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK 2</label>
                    {!! Form::text('link2',$carrusel->link2 ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto2">IMAGEN SEGUNDO POST</label> <br>
                    <img src="/img/carrusel/{{$carrusel->urlfoto2}}" class="mx-auto d-block w-50   fluid rounded-circle thumbnail"  style="image-rendering: pixelated; border:white 3px solid;">
                    {!! Form::file('urlfoto2') !!}
                </div>
             </div>   
             <div class="col-sm-4"> 
                <div class="form-group">
                    <label for="title">INGRESE TITLE 3</label>
                    {!! Form::text('title3',$carrusel->title3,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>         
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN 3</label>
                    {!! Form::text('descripcion3',$carrusel->descripcion3,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK 3</label>
                    {!! Form::text('link3',$carrusel->link3 ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto3">IMAGEN TERCER POST</label> <br>
                    <img src="/img/carrusel/{{$carrusel->urlfoto3}}" class="mx-auto d-block w-50   fluid rounded-circle thumbnail"  style="image-rendering: pixelated; border:white 3px solid;" >
                    {!! Form::file('urlfoto3') !!}
                </div>
                </div>
            </div>

                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',$carrusel->orden,['class'=>'form-control']) !!}
                </div>
             
            </div>  
       
            
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    //  CKEDITOR.replace( 'descripcion' );
</script>
@endsection