@extends('layouts.appfront')

@section('content')
<div class="container bg-white">
    
    <div class="row justify-content-center">
        <div class="col-sm-12 mt-5 mb-5 text-center">
            <h1 class="text-danger">BLOG</h1>
            <h3>Consejos para viajar, experiencias, recomendaciones, ideas geniales y mas.....!</h3>
        </div>
    </div>
    
    <div class="store-wrapper">
    <section class="products-list">
<!-- 
   <div class="row pb-5">
    <div class="timeline p-5">
        <ul> -->
            @foreach ($posts as $r)

            <div class="card  product-item" style="width: 18rem; border: solid 5px #E8C300;">
            <img class="card-img-top mx-auto d-block w-100 width-75-blog  fluid rounded-circle thumbnail" style="width:100%" src="/img/post/{{$r->urlfoto}}" alt="" >            
            <div class="card-body">
            <h5 class="card-title text-center">{{$r->nombre}}</h5>
            <p class="card-text text-justify">{{$r->description}}</p>
            <a href="/blog/{{$r->slug}}" class="btn btn-primary" style="background: #4B6D50;">leer</a>
            </div>
            </div>
            <!-- <li>
                <div class="">
                <div class="wrap" style="padding-top: 2%;">
               
                <div class="row bg-white" >

                <div class=" col-sm-6" >
                <img class="mx-auto d-block w-100 width-75  fluid rounded-circle thumbnail" style="width:100%" src="/img/post/{{$r->urlfoto}}" alt="" >
                </div>
                <div class=" col-sm-6" >
                <div class="store-wrapper">
                   
                   <h2 class="h4"><a href="/blog/{{$r->slug}}" class="text-danger text-decoration-none">{{$r->nombre}}</a></h2>
                   <p class="text-black">{{$r->description}}</p>
                   
               </div>
                </div>
                </div>
                
               
                </div>
                </div>
            </li> -->
            
            @endforeach
            </section>
</div>
        <!-- </ul>
    </div>

   </div> -->

</div>
<style>
    .timeline{
        margin-top: 60px;
    }
    .timeline::before{
        content: '';
        position: absolute;
        left: 50%;
        width: 2px;
        height: 100%;
        background: black;
    }
    .timeline ul{ margin: 0; padding: 0}
    .timeline ul li{ 
        list-style: none;
        position: relative;
        width: 50%;
        padding: 40px;
        box-sizing: border-box;
        }
    .timeline ul li:nth-child(odd){
        float: left;
        text-align: right;
        clear: both;
      
     }
     .timeline ul li:nth-child(even){
        float: right;
        text-align: left;
        clear: both;
      
     }

     .timeline ul li:nth-child(odd)::before{
         content: '';
         position: absolute;
         top: 40px;
         right: -10px;
         width: 20px;
         height: 20px;
         background: black;
         border-radius: 50%;
     }
     .timeline ul li:nth-child(even)::before{
         content: '';
         position: absolute;
         top: 40px;
         left: -10px;
         width: 20px;
         height: 20px;
         background: black;
         border-radius: 50%;
     }

</style>
@endsection