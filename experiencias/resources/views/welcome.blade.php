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
            <a>{{$item->encabezado}}</a>
            <a>{{$item->subencabezado}}</a>
            </div>
            </div>
            <div class="carousel-caption ml-auto mr-auto mx-auto">  
            <div class="row" style="flex-wrap: nowrap;">  
            <div class="col-sm-4 col-xs-4 col-md-4">      
                <img src="/img/carrusel/{{$item->urlfoto1}}" class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">           
                 <a class="">{{$item->title}}</a>
                 <a class="">{{$item->descripcion}}<a>
                 <a href="{{$item->link}}" class="btn btn-light btn-sm btn-xs btn-radius ">VER MÁS</a>
            </div>  
            <div class="col-sm-4 col-xs-4 col-md-4">      
                <img src="/img/carrusel/{{$item->urlfoto2}}" class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">           
                <a class="">{{$item->title2}}</a>
                 <a class="">{{$item->descripcion2}}<a>
                 <a href="{{$item->link}}" class="btn btn-light btn-sm btn-xs btn-radius">VER MÁS</a>
            </div> 
            <div class="col-sm-4 col-xs-4 col-md-4">      
                <img src="/img/carrusel/{{$item->urlfoto3}}" class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" alt="{{$item->frase}}" style="image-rendering: pixelated; border:white 3px solid;">           
                <a class="">{{$item->title3}}</a>
                 <a class="">{{$item->descripcion3}}<a>
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



  <div class="wrap">
		<h1>Puedes filtrar la la experiencia que buscas</h1>
		<div class="store-wrapper">
		
			<section class="products-list col-sm-10">
      @forelse ($producto as $item)
      <div class="thumbnail  product-item" category="{{$item->categoria_id}}">
					<img class="thumbnail w-100" src="/img/producto/{{$item->urlfoto}}" alt="" >
					<a href="#"><strong>{{$item->title}}</strong></a>
          <a>{!!$item->descripcion!!}</a>
          <p>       
          <a href="#" style="display: inline;" class="btn btn-info btn-xs btn-radius" role="button">Aventura</a>
          <a href="#" style="display: inline;" class="btn btn-success btn-xs btn-radius" role="button">Naturaleza</a>
          <a href="#" style="display: inline;" class="btn btn-warning btn-xs btn-radius" role="button">Isla Mujeres</a>
        </p>
				</div>

      @empty
        @endforelse
			
			</section>
      
      <div class="category_list col-sm-2">
      <section class="facet">
      <a class="collapse-controle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            App benifits tittle one goes here
                            <span class="expand-icon-wrap"><i class="fa expand-icon"></i></span>
                        </a>
  <div class="facet-header">
    <button type="button" class="btn btn-link facet-toggle collapsed collapse-controle" data-toggle="collapse" href="#facetCheckboxes" aria-expanded="false" aria-controls="collapseExample">
      <strong class="facet-title">Experiencia</strong>
    </button>
  </div>
  <div class="facet-body collapse" id="facetCheckboxes" style="">
  <ul class="facet-group">
      <li class="facet-group-item" style="display: block;">
        <label class="form-check-label">
          <input class=" category_item form-check-input" type="checkbox" value="" category="all">
         <a>Todo</a>
        </label>
      </li>
      @forelse ($categorias as $item)
      <li class="facet-group-item" style="display: block;">
        <label class="form-check-label">
          <input class=" category_item form-check-input" type="checkbox" value="" category="{{$item->id}}">
         <a>{{$item->nombre}}</a>
        </label>
      </li>
      @empty
        @endforelse
   
    </ul>
   
    
  </div>
</section>

				<!-- <a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="1">Naturaleza</a>
				<a href="#" class="category_item" category="3">Gastronomía</a>
				<a href="#" class="category_item" category="2">Aventura</a>
				<a href="#" class="category_item" category="5">Alojamiento</a>
				<a href="#" class="category_item" category="6">Transportación</a> -->
			</div>
		</div>
	</div>
  <div class= "row container">
    <div class="wrap">
    <div class="store-wrapper">
    <div class="category_list">
    <div class="bd-example">
<section class="facet">
  <div class="facet-header">
    <button type="button" class="btn btn-link facet-toggle collapsed" data-toggle="collapse" href="#facetCheckboxes" aria-expanded="false" aria-controls="collapseExample">
      <strong class="facet-title">Experiencia</strong>
    </button>
  </div>
  <div class="facet-body collapse" id="facetCheckboxes" style="">
    <ul class="facet-group">
      <li class="facet-group-item">
        <label class="form-check-label">
          <input class=" category_item form-check-input" type="checkbox" value="" category="1">
         Naturaleza
        </label>
      </li>
      <li class="facet-group-item">
        <label class="form-check-label">
          <input class=" category_item form-check-input" type="checkbox" value="" category="2">
          Gastronomía
        </label>
      </li>
      <li class="facet-group-item">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          Alojamiento
        </label>
      </li>
      <li class="facet-group-item">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          Vida nocturna
        </label>
      </li>
    </ul>
    <div class="collapse" id="facetChecksCollapseItem">
      <ul class="facet-group">
        <li class="facet-group-item">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
            Estilo de vida
          </label>
        </li>
        <li class="facet-group-item">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
            VIP
          </label>
        </li>
        <li class="facet-group-item">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
            Arte
          </label>
        </li>
        <li class="facet-group-item">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
           Aventura
          </label>
        </li>
        <li class="facet-group-item">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
           Transportación
          </label>
        </li>
        <li class="facet-group-item">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
           Memorias
          </label>
        </li>
        <li class="facet-group-item">
          <label class="form-check-label">
            <input class="form-check-input" type="checkbox" value="">
           Promociones
          </label>
        </li>
      </ul>
    </div>
    <button type="button" class="btn btn-link facet-toggle facet-toggle-more" data-toggle="collapse" href="#facetChecksCollapseItem" aria-expanded="false" aria-controls="collapseExample">Show all</button>
  </div>
</section>
</div>
</div>
</div>
</div>
</div>
 
  <div class="col-sm-8">
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

  <div class="row" style="padding-top: 3%;">
    @forelse ($producto as $item)
    <div class="col-sm-6 col-md-4"> 
    <div class="thumbnail product-item" category="{{$item->categoria_id}}">   
      <img class="thumbnail w-100" src="/img/producto/{{$item->urlfoto}}" alt="...">
      <div class="caption">
        <h3>{{$item->title}}</h3>
        {!!$item->descripcion!!}
        <p>
       
          <a href="#" class="btn btn-info btn-xs btn-radius" role="button">Aventura</a>
          <a href="#" class="btn btn-success btn-xs btn-radius" role="button">Naturaleza</a>
          <a href="#" class="btn btn-warning btn-xs btn-radius" role="button">Isla Mujeres</a>
        </p>
      </div>    
    </div>  
  </div>
  @empty
        @endforelse
</div>
<div class="col-sm-2">
  

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
<div class=" container row"> 
                <img src="/img/configuracion/tortuga marina.jpg" alt="footer" style="width: 103%;">
                     
</div>
</div>
@endsection
