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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/buttons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-3.2.1.js"></script>
	<script src="/js/script.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <!-- <script src="/js/map_charts1.js"></script>
    <script src="/js/svg.js"></script> -->
    <!-- <script src="/js/jquery.maphighlight.min.js"></script> -->
    <style>
  
        ::placeholder { color: white;  }
        .navbar-light .navbar-nav .nav-link {color:black !important}
        .bg-danger{ background:white !important}
        .text-danger{ color:#FF4000 !important}
        .text-warning{ color:#FFC926 !important}
        .bg-warning{ background:#FFC926 !important}
        *{padding:0;margin:0;}

        body{
            font-family: 'Muli', sans-serif;
            font-size:18px;
            background-color:#CCC;
        }
        ul {
            
        }

        ul li {
            display: inline-block;
            padding-top: 5px;
            margin-right: 10px;
            border-top: 4px solid transparent;
        }

        ul li:hover {
            border-bottom: 4px solid #E8C300;
        }
     
        .estilo-x {
font-size: calc(0.5em + 0.5vw);

padding: 0.5em;
margin: 0.5em;}

.searchbar{

    margin-bottom: auto;
    margin-top: 2%;
    height: 27px;
    background-color: #E8C300;
    border-radius: 5px;
    padding: 5px;
    width: 30%;
    }

    .search_input{
    color: white;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 20px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 0 10px;
    width: 45%;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    }

    .search_icon{
    height: 20px;
    width: 20px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
    }
   
    </style>
</head>
<body class="bg-danger">
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
                            <a class="nav-link" href="/" title="Portada">EXPERIENCIAS</a>
                        </li> 
                        <li class="nav-item">
                        <a class="nav-link" href="/contacto" title="Datos contacto">CONTACTO</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/blog" title="Últimas publicaciones">BLOG</a>
                           
                        </li>
                    </ul>

                   
                </div>
            </div>
        </nav>
        

        @yield('content')
        <div id="fb-root"></div>


        <footer style="font-size: 0.9rem;">
      <div class="container">
                <div style="margin-bottom: 5%; margin-top:2%; text-align: left; background-color:#71D7E4; " class="container"> 
                <div class="row">
                <div class="col-lg-2" style="line-height: 0.5; margin-top:2%;">
                </div>
                  <div class="col-lg-4" style="line-height: 0.5; margin-top:1%;">
                         <p style="text-align: left; color:black; " ><a class="estilo-x">Quienes somos</a></P>    
                         <p style="text-align: left; color:black; "><a class="estilo-x">Ayuda</a></P>                      
                         <p style="text-align: left; color:black; "><a class="estilo-x">Blog</a></P>                      
                         <p style="text-align: left; color:black;"><a class="estilo-x">FAQ'S</a></P> 
                        
                  </div>
                      <div class="col-lg-4" style="line-height: 0.5; margin-top:5%;">
                      <div  style="text-align: right;">
                          <a href="https://www.youtube.com/channel/UCsxX_6skG3RYIp8AtF1PZww">
                          <img style= " width: 12%;"src="/img/configuracion/youtube-logo.png" alt="">
                          </a>
                          <a href="https://www.facebook.com/ContelExperiencias">
                          <img style= " width: 12%;"src="/img/configuracion/facebook-logo.png" alt="">
                          </a> 
                          <a href="https://twitter.com/contelexperiencias">
                          <img style= "width: 12%;"  src="/img/configuracion/twitter-logo.png" >
                          </a>                          
                        </div>
                    </div>
               </div>             

                <div class="row"> 
                <img src="/img/configuracion/background.PNG" alt="footer" style="width: 100.2%;">
                     
                </div>

                </div>
                </div>
            </footer>
</body>
</html>
