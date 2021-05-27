@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('admin.submenu')
        <div class="col-sm-10">
        <h4 class="text-center">Producto de la Categoria: {{$categorias[0]->nombre}}</h4>
            <a href="{{route('producto.index')}}" class="btn-sm btn-success">Regresar</a>

            {!! Form::open(['route'=>['producto.update',$producto],'method'=>'PUT','files'=>true]) !!}

            <div class="jumbotron">
            
        
         
               
           
                <div class="form-group">
                    <label for="title">INGRESE TITLE</label>
                    {!! Form::text('title',$producto->title,['class'=>'form-control','maxlength'=>'67']) !!}
                </div>
                <div class="form-group">
                    <label for="description">INGRESE description</label>
                    {!! Form::textarea('description',$producto->description,['class'=>'form-control','maxlength'=>'67','rows'=>'3']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">INGRESE NOMBRE</label>
                    {!! Form::text('nombre',$producto->nombre,['class'=>'form-control','maxlength'=>'100']) !!}
                </div>

                <div class="form-group">
                    <label for="descripcion">INGRESE DESCRIPCIÓN</label>
                    {!! Form::textarea('descripcion',$producto->descripcion,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="nombre">INGRESE TARIFA</label>
                    {!! Form::text('tarifa',$producto->tarifa,['class'=>'form-control','maxlength'=>'67']) !!}
                </div> 
 
             <div class=" row form-group col-sm-12">
              <div class="col-sm-6">
               <span class="anchor"><strong>DESTINOS</strong></span>
               
                   
               @forelse ($destinos as $item)   
               @php $activochk=''; @endphp 
               <ul class="items">                 
                    @forelse ($relProductoDestino as $it)            
                
                        @if($item->id == $it->destino_id)
                        @php $activochk='checked'; @endphp                   
                        
                       
                       
                        @endif
                    @empty
                    @endforelse
                   
                    <li> {!! Form::checkbox($item->slug, $item->id, $activochk) !!}<label for="{{$item->nombre}}"> {{$item->nombre}}</label></li> 


          

              
                    
                   
                </ul>                    
          
               @empty
                       
               @endforelse

                 
              </div> 
              <div class="col-sm-6">
              <span class="anchor"><strong>¿Con Quién?</strong></span>
              <!-- <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="familia" id="familia" {{ ($producto->familia == 1) ? 'checked' : '' }}>

                                    <label class="form-check-label" for="familia">
                                        {{ __('familia') }}
                                    </label>
                </div> -->
                <ul class="items">
              
                
                    <li> {!! Form::checkbox('Familia', $producto->familia, ($producto->familia == 1) ? 'checked' : '' ) !!}<label for="familia"> En familia </label></li>
                    <li> {!! Form::checkbox('Pareja', $producto->pareja, ($producto->pareja == 1) ? 'checked' : '' ) !!}<label for="pareja">En Pareja</label></li>
                    <li> {!! Form::checkbox('Grupo',  $producto->grupo, ($producto->grupo == 1) ? 'checked' : '') !!}<label for="grupo">Grupo</label></li>
                    <li> {!! Form::checkbox('Solo',  $producto->solo, ($producto->solo == 1) ? 'checked' : '') !!}<label for="solo">Solo</label></li>
                   
                </ul> 
              </div>                           
            </div> 

                <div class="form-group">
                    <label for="orden">INGRESE ORDEN</label>
                    {!! Form::text('orden',$producto->orden,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    <label for="urlfoto">IMAGEN (400 x 386 px)</label> <br>
                    <img src="/img/producto/{{$producto->urlfoto}}?{{rand(22,99999) }}">
                    {!! Form::file('urlfoto') !!}
                </div>
               <div class="row">
               
               <div class="form-group col-sm-3">
                    <label for="urlfoto">IMAGEN (400 x 386 px)</label> <br>
                    <img class="thumbnail w-100" src="/img/producto/{{$producto->urlfoto2}}?{{rand(22,99999) }}">
                    {!! Form::file('urlfoto2') !!}
                </div>
                <div class="form-group col-sm-3">
                    <label for="urlfoto">IMAGEN (400 x 386 px)</label> <br>
                    <img class="thumbnail w-100" src="/img/producto/{{$producto->urlfoto3}}?{{rand(22,99999) }}">
                    {!! Form::file('urlfoto3') !!}
                </div>
                <div class="form-group col-sm-3">
                    <label for="urlfoto">IMAGEN (400 x 386 px)</label> <br>
                    <img class="thumbnail w-100" src="/img/producto/{{$producto->urlfoto4}}?{{rand(22,99999) }}">
                    {!! Form::file('urlfoto4') !!}
                </div>
                <div class="form-group col-sm-3">
                    <label for="urlfoto">IMAGEN (400 x 386 px)</label> <br>
                    <img class="thumbnail w-100" src="/img/producto/{{$producto->urlfoto5}}?{{rand(22,99999) }}">
                    {!! Form::file('urlfoto5') !!}
                </div>
               
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