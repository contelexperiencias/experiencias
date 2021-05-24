@extends('layouts.appfront')

@section('content')
<div class="container bg-warning pb-5">
    <div class="row">
        <h1 class="p-3 text-danger text-center w-100 mt-5">{{$post->nombre}}</h1>
        <img src="/img/post/{{$post->urlfoto}}" class="img-fluid mx-auto d-block">

        

    </div>
    
    <div class="col-sm-12 p-5  mt-5 mb-5 bg-white rounded-lg">

        {!!$post->descripcion!!}

        <hr>
        <p class="small text-right">Leido {{$post->visitas}} veces | Publicado {{$post->created_at->diffForHUmans()}}</p>


    </div>

</div>
@endsection