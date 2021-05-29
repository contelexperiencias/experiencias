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
    <link rel="stylesheet" href="/css/estilos.css">
    <link rel="stylesheet" href="/css/dist/ekko-lightbox.css">
    
    <!-- <link rel="stylesheet" href="/css/galeria.css">
    <link href="https://cdn.jsdelivr.net/lightgallery/1.3.9/css/lightgallery.min.css" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="/css/custom.scss.css">
    <link rel="stylesheet" href="/css/theme.scss.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/jquery-3.2.1.js"></script>
	<script src="/js/script.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script src="/css/dist/ekko-lightbox.min.js"></script>
    <script src="/css/dist/ekko-lightbox.js"></script>
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
        .w {
  width:50vmin;
  height:80vmin;
}

.ts {
  width:100%; height:100%;
  position:relative;
  --barH:20%;/*active zone height = 100% - barH*/
}

.t {
  --w:20%;
  display:block; width:var(--w); height:var(--barH);
  position:absolute; bottom:0; left:var(--l);
  transform-origin:top left;
}

.t img {
  dislay:block; width:100%; height:100%;
  object-fit:cover;
  transform:scale(0.8);
}

[type="radio"] { 
  display:none; 
}

:checked + label.t {
  left:0; bottom:var(--barH);
  height:calc(100% - var(--barH));
}

:checked + label.t img {
  object-fit:contain;
}

/* 
optional
*/

.ts {/*thumbnails bar*/
  perspective:100px;
  perspective-origin:center center;
  transform-style:preserve-3d;
  pointer-events:none;
}

.ts:after {/*the plate*/
  content:"";
  display:block; width:100%; height:15px;
  position:absolute; bottom:0;
  background:linear-gradient(transparent 20%, rgba(0,0,0,0.1));
  transform:rotateX(90deg)scaleX(1.2);
  transform-origin:bottom center;
}

:not(:checked) + .t {/*inactive labels*/
  transform:translate3d(0, 0, -5px);
  pointer-events:auto;
}

:not(:checked) + .t:hover {
  transform:translate3d(0, -7px, -5px);
  box-shadow:0 30px 30px -25px rgba(0,0,0,0.3);
  cursor:pointer;
}

:not(:checked) + .t img {
  transform:scale(0.9);/*create gaps*/
}

:checked + .t {/*active label*/
  /* box-shadow:0 0 0 transparent;
  animation:anim 2s 1; */
} @keyframes anim {
  from { transform:rotateY(6deg)rotateX(3deg) }
}

/* 
transitions
*/
.t {/*active->inactive & hover->rest*/
  /* transition:transform 0.5s, bottom 0.6s, left 0.6s, width 0.3s, box-shadow 1s; */
}
.t:hover, :checked + .t {
  /* transition:transform 0.5s, bottom 0.6s, left 0.6s, width 0.3s, box-shadow 0s; */
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
    .demo-gallery > ul > li a { 
  border: 3px solid #FFF;
  border-radius: 3px;
  display: block;
  overflow: hidden;
  position: relative;
  float: left;
}
.demo-gallery > ul > li a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}
.demo-gallery > ul > li a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}
.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
  opacity: 1;
}
.demo-gallery > ul > li a .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}
.demo-gallery > ul > li a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}
.demo-gallery > ul > li a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}
.demo-gallery .justified-gallery > a > img {
  -webkit-transition: -webkit-transform 0.15s ease 0s;
  -moz-transition: -moz-transform 0.15s ease 0s;
  -o-transition: -o-transform 0.15s ease 0s;
  transition: transform 0.15s ease 0s;
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  height: 100%;
  width: 100%;
}
.demo-gallery .justified-gallery > a:hover > img {
  -webkit-transform: scale3d(1.1, 1.1, 1.1);
  transform: scale3d(1.1, 1.1, 1.1);
}
.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
  opacity: 1;
}
.demo-gallery .justified-gallery > a .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.1);
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-transition: background-color 0.15s ease 0s;
  -o-transition: background-color 0.15s ease 0s;
  transition: background-color 0.15s ease 0s;
}
.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
  left: 50%;
  margin-left: -10px;
  margin-top: -10px;
  opacity: 0;
  position: absolute;
  top: 50%;
  -webkit-transition: opacity 0.3s ease 0s;
  -o-transition: opacity 0.3s ease 0s;
  transition: opacity 0.3s ease 0s;
}
.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
  background-color: rgba(0, 0, 0, 0.5);
}
.demo-gallery .video .demo-gallery-poster img {
  height: 48px;
  margin-left: -24px;
  margin-top: -24px;
  opacity: 0.8;
  width: 48px;
}
.demo-gallery.dark > ul > li a {
  border: 3px solid #04070a;
}
.home .demo-gallery {
  padding-bottom: 80px; 
}


#lightbox .modal-content {
    display: inline-block;
    text-align: center;   
}

#lightbox .close {
    opacity: 1;
    color: rgb(255, 255, 255);
    background-color: rgb(25, 25, 25);
    padding: 5px 8px;
    border-radius: 30px;
    border: 2px solid rgb(255, 255, 255);
    position: absolute;
    top: -15px;
    right: -55px;
    
    z-index:1032;
}

.wrapper {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #eee
}

.card {
    border: none;
    padding: 10px;
    /* width: 519px; */
    position: relative
}

.off {
    position: absolute;
    left: 76%;
    top: 3%;
    width: 72px;
    text-align: center;
    height: 25px;
    line-height: 8px;
    border-radius: 4px;
    font-size: 13px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff
}

.thumbnail {
    margin-top: 20px
}

.thumbnail img {
    display: inline-block;
    width: 100px;
  
    border: 1px solid #eee;
    padding: 5px;
    cursor: pointer;
    border-radius: 4px
}

.thumbnail img:hover {
    border: 1px solid #00000059
}

.about {
    margin-top: 20px
}

.product_fav i {
    line-height: 40px;
    color: #343a40;
    font-size: 15px
}

.product_fav {
    display: inline-block;
    width: 36px;
    height: 39px;
    background: #FFFFFF;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
    border-radius: 11%;
    text-align: center;
    cursor: pointer;
    margin-left: 3px;
    -webkit-transition: all 200ms ease;
    -moz-transition: all 200ms ease;
    -ms-transition: all 200ms ease;
    -o-transition: all 200ms ease;
    transition: all 200ms ease
}

.product_fav:hover {
    background: #343a40
}

.product_fav:hover i {
    color: #fff
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
<script>
function change_image(image){
var image_container = document.getElementById("main-image");


image_container.src = image.src;

}
const els = document.querySelectorAll("[type='radio']");
for (const el of els)
  el.addEventListener("input", e => reorder(e.target, els));
reorder(els[0], els);

function reorder(targetEl, els) {
  const nItems = els.length;
  let processedUncheck = 0;
  for (const el of els) {
    const containerEl = el.nextElementSibling;
    if (el === targetEl) {//checked radio
      containerEl.style.setProperty("--w", "100%");
      containerEl.style.setProperty("--l", "0");
    }
    else {//unchecked radios
      containerEl.style.setProperty("--w", `${100/(nItems-1)}%`);
      containerEl.style.setProperty("--l", `${processedUncheck * 100/(nItems-1)}%`);
      processedUncheck += 1;
    }
  }
}

</script>