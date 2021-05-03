@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
        
        <h4 class="text-center">NUEVO DESTINO</h4>
            <a href="{{route('destino.index')}}" class="btn-sm btn-success">Regresar</a>

            {!! Form::open(['route'=>['destino.store'],'method'=>'POST','files'=>true]) !!}
           

           
           
            <div class="jumbotron">
             <div class="form-group">
                <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',null ,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>        
               

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE DEL DESTINO</label>
                    {!! Form::text('nombre',null ,['class'=>'form-control','maxlength'=>'67']) !!}
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