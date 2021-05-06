@extends('layouts.appfront')

@section('content')
<div class="container">
<div class="container-fluid p-0">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @forelse ($carrusel as $item)
            <li data-target="#carouselExampleCaptions" data-slide-to="{{$item->orden}}" class="@if($loop->index==0) active @endif"></li>
            @empty
            @endforelse
        </ol>
        <div class="carousel-inner">
        @forelse ($carrusel as $item)
          <div class="carousel-item @if($loop->index==0) active @endif">
              
            <img src="/img/carrusel/{{$item->urlfoto}}" class="d-block w-100 img-fluid" alt="{{$item->frase}}" style="image-rendering: pixelated;"> 
            <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-12 carousel-caption  pb-5" style="left: 0%!important; top: 5%!important; height: 15%;">
            <h2>{{$item->encabezado}}</h2>
            <h5>{{$item->subencabezado}}</h5>
            </div>
            </div>
            <div class="carousel-caption ml-auto mr-auto mx-auto">  
            <div class="row" style="flex-wrap: nowrap;">  
            <div class="col-sm-4 col-xs-4 col-md-4">      
                <img src="/img/carrusel/{{$item->urlfoto1}}" class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">           
                 <p class="estilo-x">{{$item->title}}</p>
                 <p class="estilo-x">{{$item->descripcion}}<p>
                 <a href="{{$item->link}}" class="btn btn-light btn-sm btn-xs btn-radius ">VER MÁS</a>
            </div>  
            <div class="col-sm-4 col-xs-4 col-md-4">      
                <img src="/img/carrusel/{{$item->urlfoto2}}" class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">           
                <p class="estilo-x">{{$item->title2}}</p>
                 <p class="estilo-x">{{$item->descripcion2}}<p>
                 <a href="{{$item->link}}" class="btn btn-light btn-sm btn-xs btn-radius">VER MÁS</a>
            </div> 
            <div class="col-sm-4 col-xs-4 col-md-4">      
                <img src="/img/carrusel/{{$item->urlfoto3}}" class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">           
                <p class="estilo-x">{{$item->title3}}</p>
                 <p class="estilo-x">{{$item->descripcion3}}<p>
                 <a href="{{$item->link}}" class="btn btn-light btn-sm btn-xs btn-radius">VER MÁS</a>
            </div> 
            </div>  
            </div>

            <!-- <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="col-sm-3 col-xs-3 col-md-3 carousel-caption    ml-auto mr-auto" style="left: 12%!important;">          
                <img src="/img/carrusel/{{$item->urlfoto1}}" class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">           
                 <h4>{{$item->title}}</h4>
                 <h5>{{$item->descripcion}}</h5>
                 <a href="{{$item->link}}" class="btn btn-light btn-sm btn-radius">VER MÁS</a>
               </div>
               <div class="col-sm-3 col-xs-3 col-md-3 carousel-caption  pb-5" style="left: 37%!important;">
                <img src="/img/carrusel/{{$item->urlfoto2}}" class="mx-auto d-block w-100 width-75 img-fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">
                <h4>{{$item->title2}}</h4>
                <h5>{{$item->descripcion2}}</h5>
                <a href="{{$item->link}}" class="btn btn-light btn-sm btn-radius">VER MÁS</a>
               </div>
              <div class="col-sm-3 col-xs-3 col-md-3 carousel-caption  pb-5" style="left: 60%!important;">
                <img src="/img/carrusel/{{$item->urlfoto3}}" class=" mx-auto d-block w-100 width-75 img-fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">
                <h4>{{$item->title3}}</h4>
                <h5>{{$item->descripcion3}}</h5>
                <a href="{{$item->link}}" class="btn btn-light  btn-sm btn-radius">VER MÁS</a>
              </div>
            </div>
            </div> -->
          </div>
        @empty
        @endforelse
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

</div>
<div class="col-sm-10">

   <div class="container h-100">
   <form action=""> 
      <div class="d-flex justify-content-center h-100">             
        <div class="searchbar">         
          <input class="search_input" type="text" name="" placeholder="Search...">
          <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
        </div>       
      </div>
      </form>
    </div>
    <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img data-src="..." alt="...">
      <div class="caption">
        <h3>Título de la imagen</h3>
        <p>...</p>
        <p>
          <a href="#" class="btn btn-primary" role="button">Botón</a>
          <a href="#" class="btn btn-default" role="button">Botón</a>
        </p>
      </div>
    </div>
  </div>
</div>
   
  <!-- <form action="">
    <div class="input-group">
      <input type="text" class="form-control" id="search" placeholder="buscar">
      <div class="input-group-append">
        <button class="btn btn-danger" type=button>Buscar</button>
      </div>
     </div>
  </form> -->

</div>
</div>
@endsection
