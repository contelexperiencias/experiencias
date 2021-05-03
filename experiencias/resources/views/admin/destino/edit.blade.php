@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
        <h4 class="text-center">Destino</h4>
            <a href="{{route('producto.index')}}" class="btn-sm btn-success">Regresar</a>

            {!! Form::open(['route'=>['destino.update',$destino],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
            
        
         
               
           
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',$destino->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
             

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE DEL DESTINO</label>
                    {!! Form::text('nombre',$destino->nombre,['class'=>'form-control','maxlength'=>'100']) !!}
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