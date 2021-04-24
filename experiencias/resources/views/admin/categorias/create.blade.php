@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10"> 
        <h4 class="text-center">CREAR CATEGORÍA</h4>
        {!! Form::open(['route'=>['categoria.store'],'method'=>'POST','files'=>true]) !!}
        
        <a href="{{route('categoria.index')}}" class="btn-sm btn-success">Regresar</a>
            <div class="jumbotron">
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',null,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">INGRESE DESCRIPTION</label>
                    {!! Form::text('description',null ,['class'=>'form-control','maxlength'=>'155','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',null ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN</label> <br>
                    <img src="/img/categoria/foto.jpg">
                    {!! Form::file('urlfoto') !!}
                </div>
                {!! Form::submit('Guardar',['class'=>'btn btn-success'])!!}
                {!! Form::close() !!}

            </div>
           
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'descripcion' );
</script>
@endsection