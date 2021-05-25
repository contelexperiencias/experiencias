@extends('layouts.appfront')

@section('content')
<div class="container">
<div class="row">

<div class="w col-sm-6" >
 <div class="ts">
    <input type="radio" id="c1" name="ts" checked="checked">
    <label class="t" for="c1" style="--w:25%; --l:0%;"><img src="/img/producto/{{$producto->urlfoto}}"></label>
    <input type="radio" id="c2" name="ts">
    <label class="t" for="c2" style="--w:25%; --l:25%;"><img src="/img/producto/{{$producto->urlfoto}}"></label>
    <input type="radio" id="c3" name="ts">
    <label class="t" for="c3" style="--w:25%; --l:50%;"><img src="/img/producto/producto_Pizza Menú Contel.jpg"></label>
    <input type="radio" id="c4" name="ts">
    <label class="t" for="c4" style="--w:100%; --l:0;"><img src="/img/producto/producto_mariscos.jpg"></label>
    <input type="radio" id="c5" name="ts">
    <label class="t" for="c5" style="--w:25%; --l:75%;"><img src="/img/producto/producto_Lancha Snorkel.jpg"></label>
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

@endsection