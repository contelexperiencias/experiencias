@extends('layouts.appfront')

@section('content')
<div class="container bg-warning pb-5">
    <div class="row">
        <h1 class="p-3 text-danger mt-5">{{$categoria->nombre}}</h1>
        <img src="/img/categoria/{{$categoria->urlfoto}}" class="img-fluid">

    </div>

    
        @forelse ($categoria->Producto as $r)
        <div class="row m-5 bg-white p-3 rounded-lg ">
            <div class="col-sm-12">
                <h2 class="text-danger h4">{{$r->nombre}}</h2>
            </div>
            <div class="row align-items-center bg-light">
                <div class="col-sm-4">
                    <img src="/img/producto/{{$r->urlfoto}}" class="img-fluid rounded-lg">
                </div>
                <div class="col-sm-8 rounded-lg">
                    <p>{{$r->description}}</p>
                    <div class="text-right">
                        <a href="/artesanias/{{$categoria->slug}}/{{$r->slug}}" class="btn btn-danger rounded-pill pr-5 pl-5">AMPLIAR</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            
        @endforelse

    
  


</div>
@endsection