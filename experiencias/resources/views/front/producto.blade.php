@extends('layouts.appfront')

@section('content')


<div class="container">

<div class="row">

<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" >
<div class="card"> 
         <!-- <span class="off bg-dark">-10%</span> -->
        <div class="text-center p-4"><a data-fancybox="gallery1" class="fancybox"  href="/img/producto/{{$producto->urlfoto}}"> <img id="main-image"  src="/img/producto/{{$producto->urlfoto}}" width=100% /></a> </div>
        <div class="thumbnail text-center">
        <a data-fancybox="gallery1" class="fancybox"  href="/img/producto/{{$producto->urlfoto}}"> <img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto}}" width="80"></a> 
        <a data-fancybox="gallery1" class="fancybox"  href="/img/producto/{{$producto->urlfoto2}}"><img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto2}}" width="80"></a> 
        <a data-fancybox="gallery1" class="fancybox"  href="/img/producto/{{$producto->urlfoto3}}"><img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto3}}" width="80"></a>
        <a data-fancybox="gallery1" class="fancybox"  href="/img/producto/{{$producto->urlfoto4}}"><img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto4}}" width="80"></a> 
        </div>
        <!-- <div class="about text-center">
            <h6>Crysta Stylish Sunglasses 2.0</h6> <span>$9.99</span>
        </div> -->
        <!-- <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Add to cart</button>
            <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
        </div> -->
    </div>
</div>
<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" >
    <h1 class="p-3 text-Black mt-5">{{$producto->nombre}}</h1>
    {!!$producto->descripcion!!}
            <a href="mailto:{{$config->email}}" style="display: inline; font-size: 8px;" class="btn btn-info btn-xs btn-radius" role="button">EMAIL</a>
            <a href="https://api.whatsapp.com/send?phone=52{{$config->celular}}" style="display: inline; font-size: 8px;" class="btn btn-success btn-xs btn-radius" role="button">WHATSAPP</a>
            <a href="#" style="display: inline; font-size: 8px;" class="btn btn-warning btn-ms btn-radius" role="button">RESERVA</a>


</div>

</div>
</div>
<script src="/js/galeria.js">
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
</script>
@endsection