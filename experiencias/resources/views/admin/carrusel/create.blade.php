@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">

            {!! Form::open(['route'=>['carrusel.store'],'method'=>'POST','files'=>true]) !!}

            <div class="jumbotron">
            <div class="form-group">
                    <label for="encabezado">INGRESE ENCABEZADO</label>
                    {!! Form::text('encabezado',null,['class'=>'form-control','maxlength'=>'67']) !!}
            </div>  
            <div class="form-group">
                    <label for="subencabezado">INGRESE SUBENCABEZADO</label>
                    {!! Form::text('subencabezado',null,['class'=>'form-control','maxlength'=>'67']) !!}
            </div> 
            <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/carrusel/foto.jpg">
                    {!! Form::file('urlfoto') !!}
            </div>
            <div class="row">
             <div class="col-sm-4">
                <div class="form-group">
                    <label for="title">INGRESE TITLE 1</label>
                    {!! Form::text('title',null,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN 1</label>
                    {!! Form::text('descripcion',null ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK 1</label>
                    {!! Form::text('link',null ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto">IMAGEN PRIMER POST</label> <br>
                    <img src="/img/carrusel/foto.jpg">
                    {!! Form::file('urlfoto1') !!}
                </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group">
                    <label for="title">INGRESE TITLE 2</label>
                    {!! Form::text('title2',null,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN 2</label>
                    {!! Form::text('descripcion2',null ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK 2</label>
                    {!! Form::text('link2',null ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto">IMAGEN SEGUNDO POST</label> <br>
                    <img src="/img/carrusel/foto.jpg">
                    {!! Form::file('urlfoto2') !!}
                </div>
                </div>
                <div class="col-sm-4">
                <div class="form-group">
                    <label for="title">INGRESE TITLE 3</label>
                    {!! Form::text('title3',null,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN 3</label>
                    {!! Form::text('descripcion3',null ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="link">INGRESE LINK 2</label>
                    {!! Form::text('link3',null ,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    <label for="urlfoto">IMAGEN TERCER POST</label> <br>
                    <img src="/img/carrusel/foto.jpg">
                    {!! Form::file('urlfoto3') !!}
                </div>
                </div>
                </div>


            

              
             

                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',null ,['class'=>'form-control']) !!}
                </div>

               

            </div>
            {!! Form::submit('GUARDAR',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    // CKEDITOR.replace( 'descripcion' );
</script>
@endsection