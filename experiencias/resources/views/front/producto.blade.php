@extends('layouts.appfront')

@section('content')

<div class= container>
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist" style="justify-content: center;">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Pulseras</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dijes</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Cadenas</a>
    <a class="nav-item nav-link" id="nav-contact2-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact2" aria-selected="false">Aretes</a>
    <a class="nav-item nav-link" id="nav-anillo-tab" data-toggle="tab" href="#nav-anillo" role="tab" aria-controls="nav-anillo" aria-selected="false">Anillos</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="demo-gallery">
        <ul id="lightgallery1" role="tabpanel" class="tab-pane fade show active list-unstyled row">
     
        <li style="flex: 0 0 33.333333%;"  class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$producto->urlfoto}}" data-src="/img/producto/{{$producto->urlfoto}}" data-sub-html="<h4>{{$producto->title}}</h4><p>{{$producto->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$producto->urlfoto}}">
             </a>
        </li>                         
      
                               
            </ul>
        </div>
  </div>
  
</div>

</div>
<div class="container">
<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <div class="demo-gallery">
        <ul id="lightgallery1" role="tabpanel" class="tab-pane fade show active list-unstyled row">
      
        <li style="flex: 0 0 33.333333%;"  class="col-xs-6 col-sm-4 col-md-2 col-lg-2" data-responsive="/img/producto/{{$producto->urlfoto}}" data-src="/img/producto/{{$producto->urlfoto}}" data-sub-html="<h4>{{$producto->title}}</h4><p>{{$producto->nombre}}</p>">
             <a href="">
                <img class="img-responsive" src="/img/producto/{{$producto->urlfoto}}">
             </a>
        </li>                         
      
                               
            </ul>
        </div>
  </div>
<div class="row">

<div class="w col-sm-6" >
 <div class="ts">
    <input type="radio" id="c1" name="ts" checked="checked">
    <label class="t" for="c1" style="--w:25%; --l:0%;"><img src="/img/producto/{{$producto->urlfoto}}"></label>
    <input type="radio" id="c2" name="ts">
    <label class="t" for="c2" style="--w:25%; --l:25%;"><img src="/img/producto/{{$producto->urlfoto2}}"></label>
    <input type="radio" id="c3" name="ts">
    <label class="t" for="c3" style="--w:25%; --l:50%;"><img src="/img/producto/{{$producto->urlfoto3}}"></label>
    <input type="radio" id="c4" name="ts">
    <label class="t" for="c4" style="--w:100%; --l:0;"><img src="/img/producto/{{$producto->urlfoto4}}"></label>
    <input type="radio" id="c5" name="ts">
    <label class="t" for="c5" style="--w:25%; --l:75%;"><img src="/img/producto/{{$producto->urlfoto5}}"></label>
  </div>
</div>
<div class="w col-sm-6" >
    <h1 class="p-3 text-Black mt-5">{{$producto->nombre}}</h1>
    {!!$producto->descripcion!!}
            <a href="mailto:{{$config->email}}" style="display: inline; font-size: 8px;" class="btn btn-info btn-xs btn-radius" role="button">EMAIL</a>
            <a href="https://api.whatsapp.com/send?phone=52{{$config->celular}}" style="display: inline; font-size: 8px;" class="btn btn-success btn-xs btn-radius" role="button">WHATSAPP</a>
            <a href="#" style="display: inline; font-size: 8px;" class="btn btn-warning btn-ms btn-radius" role="button">RESERVA</a>


</div>

</div>
</div>
<script src="/js/galeria.js">

var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });

</script>
@endsection