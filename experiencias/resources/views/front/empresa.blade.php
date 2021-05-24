@extends('layouts.appfront')

@section('content')
<div class="container bg-warning">
    <h1 class="pt-4 text-white">NOSOTROS</h1>
    <div class="row">
        <img src="/img/empresa/{{$empresa->urlsomos}}" class="img-fluid">

        
    </div>
    
        <div class="col-sm-12 p-5 mb-5 bg-white">
            <h2>QUIENES SOMOS</h2>
            {!! $empresa->somos !!}

            <div class="row mt-5 mb-5 align-items-center">
                <div class="col-sm-4">
                    <img src="/img/empresa/{{$empresa->urlmision}}" class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h2 class="text-danger">MISIÓN</h2>
                    {!! $empresa->mision !!}
                </div>
            </div>

            <div class="row mt-5 mb-5 align-items-center">
                
                <div class="col-sm-8">
                    <h2 class="text-danger">VISIÓN</h2>
                    {!! $empresa->vision !!}
                </div>
                <div class="col-sm-4">
                    <img src="/img/empresa/{{$empresa->urlvision}}" class="img-fluid">
                </div>
            </div>


            <div class="row mt-5 mb-5 align-items-center">
                <div class="col-sm-4">
                    <img src="/img/empresa/{{$empresa->urlhistoria}}" class="img-fluid">
                </div>
                <div class="col-sm-8">
                    <h2 class="text-danger">RESEÑA HISTÓRICA</h2>
                    {!! $empresa->historia !!}
                </div>
            </div>


            <div class="row mt-5 mb-5 align-items-center">
                
                <div class="col-sm-8">
                    <h2 class="text-danger">VALORES CORPORATIVOS</h2>
                    {!! $empresa->valores !!}
                </div>
                <div class="col-sm-4">
                    <img src="/img/empresa/{{$empresa->urlvalores}}" class="img-fluid">
                </div>
            </div>



        </div>

        


</div>
@endsection