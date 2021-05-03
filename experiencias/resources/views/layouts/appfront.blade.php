<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', $config->seo_title)</title>
    <meta name="description" content="@yield('description', $config->seo_description)">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('description',  $config->seo_description)"/>
    <meta property="og:url" content="@yield('url','https://contelexperiencias.com')"/>   
    <meta property="og:site_name" content="contelexperiencias.com" />
    <meta property="og:image" content="@yield('image','https://contelexperiencias.com//img/configuracion/'.$config->seo_urlfoto)" />
    <link rel="canonical" href="@yield('url','https://contelexperiencias.com')"/>
    <link rel="shortcut icon" href="/img/configuracion/{{$config->urlfavicon}}" type="image/png" />

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <style>
     
        .navbar-light .navbar-nav .nav-link {color:black !important}
        .bg-danger{ background:white !important}
        .text-danger{ color:#FF4000 !important}
        .text-warning{ color:#FFC926 !important}
        .bg-warning{ background:#FFC926 !important}
        *{padding:0;margin:0;}

body{
	font-family:Verdana, Geneva, sans-serif;
	font-size:18px;
	background-color:#CCC;
}

.float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:55%;
	
	background-color:revert;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    z-index: 1000;
	/* box-shadow: 2px 2px 3px #999; */
}

.my-float{
	margin-top:22px;
}

.floating-buttons{
    z-index:9999;
    position:fixed;
    top:250px;left:0
}
.floating-buttons .floating-button{
    display:inline-block;
    padding:14px 18px;
    font-size:2rem;
    text-align:center;
    border-radius:0 50% 50% 0;
    color:#fff;
    transition:.2s all
    }
    .floating-buttons .floating-button:hover
    {color:#fff;box-shadow:2px 2px 5px 1px rgba(0,0,0,.25)}
    .floating-buttons .floating-button.whatsapp
    {background:#25d366}
    .appWhatsapp{
        position: fixed;
    width: 60px;
    height: 60px;
    bottom: 55%;
    background-color: revert;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    z-index: 1000;
   
    }
    .appWhatsapp img{
        width:100%;
        height:auto;
    }
    </style>
</head>
<body class="bg-danger">
<!-- <a class="appWhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=529981535274&text=Hola!&nbsp;me&nbsp;pueden&nbsp;apoyar?">
<img style= ""  src="/img/Logos/whatsappverde.png" alt="whatsapp" >
</a> -->
<!-- <div class="floating-buttons">
<a href="https://api.whatsapp.com/send?phone=529981535274&text=" class="float">                         
                          
<i class="my-float"><img style= "width: 90%; margin-top:20%"  src="img/Logos/whatsappverde.png" ></i>
</a> -->

<!-- <div class="fb-customerchat" attribution=setup_tool page_id="781167248634441" theme_color="#0084ff" logged_in_greeting="hola! cómo podemos ayudarte?" logged_out_greeting="hola! cómo podemos ayudarte?">
</div> -->
<!-- <a href="https://api.whatsapp.com/send?phone=529981535274&text=" class="float">
<i class="my-float"><img style= "width: 70%; margin-top:120%; "  src="/img/Logos/mensseger.png" ></i>
</a> -->
</div>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
               
                <img src="/img/configuracion/{{$config->urllogo}}" alt="Logo contelexperiencias" width="150">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/" title="Portada">INICIO</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ÚNETE A CONTEL JEWELRY
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" >Nosotros</a>   
                            <a class="dropdown-item"  >Modelo de negocio</a>  
                            <a class="dropdown-item"  >Galería</a>   -->
                                <!-- @forelse ($submenu as $item)
                                <a class="dropdown-item" href="/artesanias/{{$item->slug}}" title="{{$item->nombre}}" >{{$item->nombre}}</a>    
                                @empty
                                @endforelse -->
                            <!-- </div>
                        </li> -->
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="/empresa" title="Empresa"></a>
                        </li> -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              COMPRAR
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="" title="{{$item->nombre}}" >Catálogo</a>   
                            <a class="dropdown-item" href="" title="{{$item->nombre}}" >Cofres</a>  -->
                            <!-- <a class="dropdown-item" href="/artesanias/{{$item->slug}}" title="{{$item->nombre}}" >Catálogo</a>   
                            <a class="dropdown-item" href="/artesanias/{{$item->slug}}" title="{{$item->nombre}}" >Cofres</a>      -->
                                <!-- @forelse ($submenu as $item)
                                <a class="dropdown-item" href="/artesanias/{{$item->slug}}" title="{{$item->nombre}}" >{{$item->nombre}}</a>    
                                @empty
                                @endforelse -->
                            <!-- </div>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="/blog" title="Últimas publicaciones">BLOG</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contacto" title="Datos contacto">CONTACTO</a>
                        </li>
                    </ul>

                   
                </div>
            </div>
        </nav>
        

        @yield('content')
        <div id="fb-root"></div>
<!-- <script>
window.fbAsyncInit =function(){
    FB.init({
        xfbml:true,
        version:"v3.3"
    });
    };
    (function(d,s,id){
        var js, fjs=d.getElementsByTagName(s)[0];
        if (d.getElemntById(id)) return;
        js = d.createElement(s); js.id=id;
        js.src='https://connect.facebook.net/es_La/sdk/xfbml.customerchat.js';
    }(document,'script','facebook-jssdk'));
</script> -->

        <footer style="font-size: 0.9rem;">
      
                <div style="margin-bottom: 5%; margin-top:2%; text-align: left; " class="container bg-secondary"> 
                <div class="row">
                <div class= "container col-lg-4 col-md-12" style="text-align: center;">
                <a class="navbar-brand" href="{{ url('/') }}">
                          <img src="/img/configuracion/{{$config->urllogo}}" alt="Logo contelexperiencias" width="100">
                </a>  
                </div>
                <div class= "col-lg-8"  style="margin-top: 6%;">
                <h3 style="font-weight: bold;" >Contacto</h3>
                </div>
                </div>

                <div class="row">
                
                      <div class="col-lg-3 col-md-12" style="line-height: 0.5;">
                                       
                        <ul style="text-align: left;">
                            <p style="font-weight: bold;" >Dirección</p>
                            <p>{{$config->direccion}}</p>
                            <p style="font-weight: bold;" >Horario de Atención</p>
                            <p>Lunes a Viernes</p>
                            <p>9.00 - 18.00</p>
                            <p>Sábados</p>
                            <p>9.00 - 13.00</p>
                        </ul>            
                </div>
                    <div class="col-lg-3" style="line-height: 0.5;">
                      <ul  style="text-align: left;">
                      <p style="font-weight: bold;" >Teléfono</p><p>+52 {{$config->celular}}</p>
                      <p style="font-weight: bold;" >Whatsapp</p><p>+52 9981535274</p>
                      <p style="font-weight: bold;" >email</p><p> {{$config->email}}</p>
                      </ul> 
                        
                      <!-- <div  style="text-align: center;">
                          <a href="https://www.facebook.com/ContelJewelry">
                          <img style= " width: 17%;"src="/img/Logos/facebook.png" alt="">
                          </a>
                          <a href="https://www.instagram.com/ContelJewelry/">
                          <img style= " width: 15%;"src="/img/Logos/instagram.png" alt="">
                          </a> 
                          <a href="https://api.whatsapp.com/send?phone=529981535274&text=">
                          <img style= "width: 15%;"  src="/img/Logos/whatsapp.png" >
                          </a>                          
                        </div> -->
                    </div>
                    <!-- style="font-size:1vw; color: black; font-family: Sans-serif;" -->
                      <div class="col-lg-3" style="line-height: 0.5;">
                         
                         <p style="text-align: right; color:black; "><a>Garantías</a></P>                      
                         <p style="text-align: right; color:black;"><a href="https://contelferraez.com/privacidad/">Términos y condiciones</a></P> 
                         <p style="text-align: right; color:black;"><a>FAQ</a></P> 
                        
                      </div>
                      <div class="col-lg-3" style="text-align: center; line-height: 0.5;">
                      <a class="navbar-brand"  href="https://contelferraez.com/">
                          <img src="https://contelferraez.com/wp-content/themes/lam-contel2/img/logo.png" alt="Logo Artesanías" width="100">
                      </a>  
                      <p><a>Volver a sitio Contel y Ferraez</a></P>  
                         
                      </div>
                </div>

                </div>
            </footer>
</body>
</html>
