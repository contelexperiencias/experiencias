@extends('layouts.appfront')

@section('content')


<div class="container">
<div class="wrapper">
    <div class="card"> <span class="off bg-dark">-10%</span>
        <div class="text-center p-4"> <img id="main-image" src="/img/producto/{{$producto->urlfoto}}" width="300" /> </div>
        <div class="thumbnail text-center">
        <img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto}}" width="70"> 
        <img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto2}}" width="70"> 
        <img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto3}}" width="70">
        <img onclick="change_image(this)" src="/img/producto/{{$producto->urlfoto4}}" width="70"> 
        </div>
        <div class="about text-center">
            <h6>Crysta Stylish Sunglasses 2.0</h6> <span>$9.99</span>
        </div>
        <div class="cart-button mt-3 px-2 d-flex justify-content-between align-items-center"> <button class="btn btn-dark text-uppercase">Add to cart</button>
            <div class="add"> <span class="product_fav"><i class="fa fa-heart-o"></i></span> <span class="product_fav"><i class="fa fa-opencart"></i></span> </div>
        </div>
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

</script>
@endsection