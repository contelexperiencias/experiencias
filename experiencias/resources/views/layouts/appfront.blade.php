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
    <link rel="stylesheet" href="css/superfish.css">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="/js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/color-picker.min.css">

    <script src="/js/jquery-3.2.1.js"></script>
	<script src="/js/script.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script src="/js/map_charts1.js"></script>
    <script src="/js/svg.js"></script>
    <script src="/js/superfish.js"></script>
    <script src="/js/panzoom.min.js"></script>
    <script src="/js/jspdf.min.js"></script>
    <script src="/js/color-picker.min.js"></script>
    <style>
     
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
        .width-75 {
            width: 85px!important;
            height: 75px!important;

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
<script>
    var input2 = document.querySelector('#color-picker2'),
        box2 = document.createElement('div');

    box2.className = 'color-box';
    box2.style.backgroundColor = input2.value;
    box2.setAttribute('data-color', input2.value);
    input2.parentNode.insertBefore(box2, input2);
    input2.type = 'hidden';
   
    var picker = new CP(box2);

    picker.on("change", function(color2) {
        input2.value = '#' + color2;
        this.target.style.backgroundColor = border_color = '#' + color2;
		create_map();
    });	

    var input3 = document.querySelector('#color-picker3'),
        box3 = document.createElement('div');

    box3.className = 'color-box';
    box3.style.backgroundColor = input3.value;
    box3.setAttribute('data-color', input3.value);
    input3.parentNode.insertBefore(box3, input3);
    input3.type = 'hidden';
   
    var picker = new CP(box3);

    picker.on("change", function(color3) {
        input3.value = '#' + color3;
        this.target.style.backgroundColor = map_color ='#' + color3;
		change_colors(map_color,border_color,lgn_bg_color)
    });	

    var input4 = document.querySelector('#color-picker4'),
        box4 = document.createElement('div');

    box4.className = 'color-box';
    box4.style.backgroundColor = input4.value;
    box4.setAttribute('data-color', input4.value);
    input4.parentNode.insertBefore(box4, input4);
    input4.type = 'hidden';
   
    var picker = new CP(box4);

    picker.on("change", function(color4) {
        input4.value = '#' + color4;
        this.target.style.backgroundColor = lgn_bg_color = map_bg_color ='#' + color4;
		
var svg = document.getElementsByTagName('svg')[0];
svg.setAttribute("style", "background-color:"+map_bg_color);		

    });		


		
		var fnm='adm2/map_560.geo.json';
		var country_name='Quintana Roo';	
		var border_color='#000000';	
		var map_color='#F4F6F7';			
		var map_bg_color='#e0f2f1';
		var data_grf=[ {name:'Benito Juárez',value:20},{name:'Cozumel',value:13},{name:'Felipe Carrillo',value:3},{name:'Felipe Carrillo Puerto',value:6},{name:'Isla Mujeres',value:18},{name:'José María Morelos',value:20},{name:'Lázaro Cárdenas',value:23},{name:'Othón P. Blanco',value:18},{name:'Puerto Morelos',value:23} ];
		var map_width=800;
		var map_height=533.33333333333;
		var svg_parts = ["<text ","transform=\"matrix(1 0 0 1 530.5323 110.8771)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">Benito Ju\u00e1rez<","\/text>","<text ","transform=\"matrix(1 0 0 1 416.5936 185.2857)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">Cozumel<","\/text>","<text ","transform=\"matrix(1 0 0 1 461.5966 316.2415)\"","style=\"font-family:'Tahoma'; font-size:10px;\"",">Felipe Carrillo<","\/text>","<text ","transform=\"matrix(0.3834 -0.9236 0.9236 0.3834 379.378 325.4776)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">Felipe Carrillo Puerto<","\/text>","<text ","transform=\"matrix(1 0 0 1 527.1196 70.936)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">Isla Mujeres<","\/text>","<text ","transform=\"matrix(1 0 0 1 216.6595 223.6882)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">Jos\u00e9 Mar\u00eda Morelos<","\/text>","<text ","transform=\"matrix(1 0 0 1 339.5807 105.1885)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">L\u00e1zaro C\u00e1rdenas<","\/text>","<text ","transform=\"matrix(0.4603 -0.8877 0.8877 0.4603 328.044 444.8561)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">Oth\u00f3n P. Blanco<","\/text>","<text ","transform=\"matrix(1 0 0 1 520.4782 134.465)\"","style=\"font-family:'Tahoma'; font-size:13px;\"",">Puerto Morelos<","\/text>"];
		var svg_parts_tspan = null;		
		var map_zoom='1.1';
		var shadowB=14;
		var no_svg_labels='';
		var map_id='560';
        var user_id='';
		var svg_tag='<?xml version="1.0" standalone="no"?>\r\n<!-- Generator: Paintmaps.com , Online SVG vector map maker -->\r\n';

var _0x7107=['<svg\x20xmlns=\x22http://www.w3.org/2000/svg\x22','<rect\x20width=\x22100%\x22\x20height=\x22100%\x22\x20fill=\x22','1327570KwdBNJ','href','#084080','y=\x22','createElementNS','font-size','sort','slice','match','map_chart1','backgroundColor','</svg>','load','501BndHls','init','#8CD5F7','maplabels1','#000000','ajax','download.php','#capture_svg','>\x0d\x0a<path','scale','addImage','#F5FC98','getElementById','src','</filter></defs>','appendChild','56bOaLVX','PNG','width','download','createTextNode','continuous','transform','scrollLeft','setOption','img','Hata\x20:\x20','serializeToString','class','height','done','vendor','35735CTMmlg','\x0d\x0a</svg>','drawImage','5cDXFYB','hidden','canvas','x=\x22','1495355txvjYT','#capture_png','{b}','body','hideLoading','light','log','item','Created\x20with\x20paintmaps.com','#random_colors','replace','svg','toDataURL','FAST','http://www.w3.org/2000/svg','remove','#capture_pdf','checked','id=\x22f1\x22\x20x=\x22-100%\x22\x20y=\x22-100%\x22\x20width=\x221000%\x22\x20height=\x221000%\x22><feOffset\x20result=\x22offOut\x22\x20in=\x22SourceGraphic\x22\x20dx=\x22','get','text','#EA8E18','2713zhYZyK','css','image/png','94385sPIYhX','style','getElementsByTagName','map','#map_chart1','/text>','onload','scale(1,1)','bg_image1','setAttribute','>\x0d\x0a<text','#canvas2','#FB0307','#ff0066','#F6B9FD','\x22></feOffset><feColorMatrix\x20result=\x22matrixOut\x22\x20in=\x22offOut\x22\x20type=\x22matrix\x22\x20values=\x220.2\x200\x200\x200\x200\x200\x200.2\x200\x200\x200\x200\x200\x200.2\x200\x200\x200\x200\x200\x201\x200\x22></feColorMatrix><feGaussianBlur\x20result=\x22blurOut\x22\x20in=\x22matrixOut\x22\x20stdDeviation=\x228\x22></feGaussianBlur><feBlend\x20in=\x22SourceGraphic\x22\x20in2=\x22blurOut\x22\x20mode=\x22normal\x22></feBlend>','41813lPRZRh','\x22/>\x0d\x0a<path','addEventListener','click','.maplabels1','.png','maps_jsonx/','392406PkmRRZ','overflow','test','POST','getBoundingClientRect','substr','getContext','.svg','showLoading','style=\x22filter:\x20url(#f1)\x22','\x22\x20dy=\x22','background-color:','<tspan','.pdf','split','show_cities_svg','data:image/svg+xml;base64,','<defs><filter\x20','<text\x20','trans','createElement','length','#E7EA18','value'];var _0x28de=function(_0x31e37c,_0x36c1eb){_0x31e37c=_0x31e37c-0x15a;var _0x710743=_0x7107[_0x31e37c];return _0x710743;};var _0x52c642=_0x28de;(function(_0x28c7bc,_0x4f8fd8){var _0xb36899=_0x28de;while(!![]){try{var _0xb53151=parseInt(_0xb36899(0x174))*-parseInt(_0xb36899(0x1a1))+-parseInt(_0xb36899(0x18e))*-parseInt(_0xb36899(0x1cf))+-parseInt(_0xb36899(0x1c2))+parseInt(_0xb36899(0x191))+parseInt(_0xb36899(0x1a8))+-parseInt(_0xb36899(0x178))+parseInt(_0xb36899(0x171))*parseInt(_0xb36899(0x161));if(_0xb53151===_0x4f8fd8)break;else _0x28c7bc['push'](_0x28c7bc['shift']());}catch(_0x566438){_0x28c7bc['push'](_0x28c7bc['shift']());}}}(_0x7107,0xc7046));let color_arr=[_0x52c642(0x19e),_0x52c642(0x1d1),'#7BEA05',_0x52c642(0x19f),_0x52c642(0x15c),_0x52c642(0x18d),'#EA18E3',_0x52c642(0x1be),_0x52c642(0x19d),_0x52c642(0x1c4)];function shuffle(){var _0x46eeb0=_0x52c642;color_arr[_0x46eeb0(0x1c8)](()=>Math['random']()-0.5);}var visualMapx={'type':_0x52c642(0x166),'show':![],'min':0x1,'max':0x32,'inRange':{'color':[color_arr[0x0],color_arr[0x1],color_arr[0x2],color_arr[0x3],color_arr[0x4],color_arr[0x5],color_arr[0x6],color_arr[0x7],color_arr[0x8],color_arr[0x9]]}};function update_shadow(){var _0x2cc6a4=_0x52c642;shadowB=document[_0x2cc6a4(0x15d)]('shadow_size')[_0x2cc6a4(0x1bf)]*0x1,create_map();}function update_bg_image(){var _0x1c2ac1=_0x52c642;document['getElementById'](_0x1c2ac1(0x199))['checked']?map_bg_color=![]:map_bg_color=lgn_bg_color;var _0x44b8e6=document['getElementsByTagName'](_0x1c2ac1(0x183))[0x0];_0x44b8e6['setAttribute'](_0x1c2ac1(0x192),_0x1c2ac1(0x1b3)+map_bg_color),create_map();}create_map();function create_map(){var _0xcb23d6=_0x52c642,_0x4c30eb=echarts[_0xcb23d6(0x1d0)](document[_0xcb23d6(0x15d)]('map_chart1'),_0xcb23d6(0x17d),{'renderer':_0xcb23d6(0x183)});_0x4c30eb[_0xcb23d6(0x1b0)](),fnm2=_0xcb23d6(0x1a7)+fnm,$[_0xcb23d6(0x18b)](fnm2,function(_0x4b8525){var _0x326dd3=_0xcb23d6;_0x4c30eb[_0x326dd3(0x17c)](),echarts['registerMap'](country_name,_0x4b8525),_0x4c30eb[_0x326dd3(0x169)](option={'backgroundColor':map_bg_color,'tooltip':{'trigger':_0x326dd3(0x17f),'formatter':_0x326dd3(0x17a)},'visualMap':visualMapx,'geo':{'map':country_name,'zoom':map_zoom,'aspectScale':0.75,'itemStyle':{'normal':{'areaColor':_0x326dd3(0x1d3),'borderColor':_0x326dd3(0x1d3),'borderWidth':0x0,'opacity':0x1,'shadowColor':'#000000','shadowOffsetX':-shadowB*0.7,'shadowOffsetY':shadowB*0.7,'shadowBlur':shadowB,'label':{'show':![]}},'emphasis':{'opacity':0x0,'label':{'show':![]}}}},'series':[{'name':country_name,'type':_0x326dd3(0x194),'zoom':map_zoom,'mapType':country_name,'roam':![],'itemStyle':{'normal':{'areaColor':map_color,'borderColor':border_color,'label':{'show':![]}},'emphasis':{'label':{'show':![]}}},'data':data_grf}]});});}var isChrome=/Chrome/['test'](navigator['userAgent'])&&/Google Inc/[_0x52c642(0x1aa)](navigator[_0x52c642(0x170)]);isChrome==![]&&$(_0x52c642(0x19c))[_0x52c642(0x168)](($(_0x52c642(0x195))[_0x52c642(0x163)]()-$(_0x52c642(0x19c))[_0x52c642(0x163)]())/0x2);function downloadURI(_0x239b62,_0x39426b){var _0x3db6a0=_0x52c642,_0xffe3dc=document[_0x3db6a0(0x1bc)]('a');_0xffe3dc['download']=_0x39426b,_0xffe3dc[_0x3db6a0(0x1c3)]=_0x239b62,document[_0x3db6a0(0x17b)][_0x3db6a0(0x160)](_0xffe3dc),_0xffe3dc[_0x3db6a0(0x1a4)](),clearDynamicLink(_0xffe3dc);}var svg=document[_0x52c642(0x193)]('svg')[0x0];svg[_0x52c642(0x1a3)](_0x52c642(0x1ce),function(){var _0x84177e=_0x52c642;svg[_0x84177e(0x19a)](_0x84177e(0x192),_0x84177e(0x1b3)+map_bg_color);var _0xa059c9=document[_0x84177e(0x1c6)]('http://www.w3.org/2000/svg',_0x84177e(0x18c)),_0x4ebe8c=document[_0x84177e(0x165)](_0x84177e(0x180));_0xa059c9[_0x84177e(0x19a)]('x',map_width-0x9d),_0xa059c9['setAttribute']('y',map_height-0xe),_0xa059c9[_0x84177e(0x19a)](_0x84177e(0x1c7),'11'),_0xa059c9[_0x84177e(0x160)](_0x4ebe8c),svg[_0x84177e(0x160)](_0xa059c9);if(isChrome==!![]){$(_0x84177e(0x19c))[_0x84177e(0x18f)](_0x84177e(0x1a9),_0x84177e(0x175));var _0x1b6a4b=panzoom(document[_0x84177e(0x15d)](_0x84177e(0x1cb)),{'maxZoom':0x4,'minZoom':0x1,'bounds':!![],'boundsPadding':0x1});}});document[_0x52c642(0x15d)](_0x52c642(0x1b7))[_0x52c642(0x189)]&&no_svg_labels!=0x1&&f_show_cities_svg();function f_show_cities_svg(){var _0x14ed8a=_0x52c642;if(document[_0x14ed8a(0x15d)](_0x14ed8a(0x1b7))[_0x14ed8a(0x189)]==![])$(_0x14ed8a(0x1a5))[_0x14ed8a(0x187)]();else{var _0x560827=document[_0x14ed8a(0x193)](_0x14ed8a(0x183))[0x0],_0x129a4f;for(_0x129a4f=0x0;_0x129a4f<svg_parts[_0x14ed8a(0x1bd)];_0x129a4f++){if(svg_parts[_0x129a4f]==_0x14ed8a(0x1ba))var _0x11bddb=document[_0x14ed8a(0x1c6)](_0x14ed8a(0x186),_0x14ed8a(0x18c));else{if(svg_parts[_0x129a4f][_0x14ed8a(0x1ad)](0x0,0x5)==_0x14ed8a(0x1bb)){var _0x1d9704=svg_parts[_0x129a4f][_0x14ed8a(0x1b6)]('=');_0x11bddb[_0x14ed8a(0x19a)](_0x14ed8a(0x167),_0x1d9704[0x1][_0x14ed8a(0x1c9)](0x1,-0x1));}else{if(svg_parts[_0x129a4f][_0x14ed8a(0x1ad)](0x0,0x5)==_0x14ed8a(0x192)){var _0x42b78e=svg_parts[_0x129a4f][_0x14ed8a(0x1b6)]('=');_0x11bddb['setAttribute'](_0x14ed8a(0x192),_0x42b78e[0x1]['slice'](0x1,-0x1));}else{if(svg_parts[_0x129a4f][_0x14ed8a(0x1ad)](0x0,0x1)=='>'&&svg_parts[_0x129a4f][_0x14ed8a(0x1ad)](-0x1)=='<'){var _0x152eb4=document[_0x14ed8a(0x165)](svg_parts[_0x129a4f][_0x14ed8a(0x1c9)](0x1,-0x1));_0x11bddb['appendChild'](_0x152eb4);}else{if(svg_parts[_0x129a4f]['substr'](0x0,0x6)==_0x14ed8a(0x1b4)){var _0x5dba0d=document[_0x14ed8a(0x1c6)](_0x14ed8a(0x186),'tspan');for(z=0x0;z<svg_parts_tspan[_0x129a4f][0x0][_0x14ed8a(0x1bd)];z++){if(svg_parts_tspan[_0x129a4f][0x0][z][_0x14ed8a(0x1ad)](0x0,0x3)==_0x14ed8a(0x177)){var _0x4c5b59=svg_parts_tspan[_0x129a4f][0x0][z]['split']('=');_0x5dba0d[_0x14ed8a(0x19a)]('x',_0x4c5b59[0x1][_0x14ed8a(0x1c9)](0x1,-0x1));}else{if(svg_parts_tspan[_0x129a4f][0x0][z][_0x14ed8a(0x1ad)](0x0,0x3)==_0x14ed8a(0x1c5)){var _0x4239c1=svg_parts_tspan[_0x129a4f][0x0][z][_0x14ed8a(0x1b6)]('=');_0x5dba0d['setAttribute']('y',_0x4239c1[0x1][_0x14ed8a(0x1c9)](0x1,-0x1));}else{if(svg_parts_tspan[_0x129a4f][0x0][z][_0x14ed8a(0x1ad)](0x0,0x5)==_0x14ed8a(0x192)){var _0x42b78e=svg_parts_tspan[_0x129a4f][0x0][z][_0x14ed8a(0x1b6)]('=');_0x5dba0d[_0x14ed8a(0x19a)](_0x14ed8a(0x192),_0x42b78e[0x1][_0x14ed8a(0x1c9)](0x1,-0x1));}else{if(svg_parts_tspan[_0x129a4f][0x0][z][_0x14ed8a(0x1ad)](0x0,0x1)=='>'&&svg_parts_tspan[_0x129a4f][0x0][z]['substr'](-0x1)=='<'){var _0x152eb4=document['createTextNode'](svg_parts_tspan[_0x129a4f][0x0][z][_0x14ed8a(0x1c9)](0x1,-0x1));_0x5dba0d[_0x14ed8a(0x160)](_0x152eb4);}}}}}_0x11bddb[_0x14ed8a(0x160)](_0x5dba0d);}else svg_parts[_0x129a4f]==_0x14ed8a(0x196)?(_0x11bddb[_0x14ed8a(0x19a)](_0x14ed8a(0x16d),_0x14ed8a(0x1d2)),_0x560827[_0x14ed8a(0x160)](_0x11bddb)):console[_0x14ed8a(0x17e)](_0x14ed8a(0x16b)+svg_parts[_0x129a4f]);}}}}}}}$(_0x52c642(0x181))['on'](_0x52c642(0x1a4),function(){var _0x328142=_0x52c642;shuffle(),visualMapx={'type':_0x328142(0x166),'show':![],'min':0x1,'max':0x32,'inRange':{'color':[color_arr[0x0],color_arr[0x1],color_arr[0x2],color_arr[0x3],color_arr[0x4],color_arr[0x5],color_arr[0x6],color_arr[0x7],color_arr[0x8],color_arr[0x9]]}},create_map();});function change_colors(_0x8be35f,_0x486d18,_0x4f2ebf){var _0x480017=_0x52c642;box4['style']['backgroundColor']=lgn_bg_color=_0x4f2ebf,box3['style']['backgroundColor']=_0x8be35f,box2[_0x480017(0x192)][_0x480017(0x1cc)]=border_color=_0x486d18,svg[_0x480017(0x19a)](_0x480017(0x192),_0x480017(0x1b3)+_0x4f2ebf),visualMapx={'type':'continuous','show':![],'min':0x1,'max':0x32,'inRange':{'color':[_0x8be35f]}},create_map();};$(_0x52c642(0x179))['on']('click',function(){var _0x126c0d=_0x52c642;document['getElementById']('map_chart1')[_0x126c0d(0x192)][_0x126c0d(0x167)]=_0x126c0d(0x198);var _0x577f5d=document[_0x126c0d(0x193)](_0x126c0d(0x183))[0x0],_0x481065=new XMLSerializer()[_0x126c0d(0x16c)](_0x577f5d),_0x5cdab8=document['createElement'](_0x126c0d(0x176)),_0x323ffa=_0x577f5d[_0x126c0d(0x1ac)]();_0x5cdab8['width']=_0x323ffa[_0x126c0d(0x163)]*2.5,_0x5cdab8[_0x126c0d(0x16e)]=_0x323ffa[_0x126c0d(0x16e)]*2.5,_0x5cdab8[_0x126c0d(0x192)]['width']=_0x323ffa[_0x126c0d(0x163)],_0x5cdab8[_0x126c0d(0x192)][_0x126c0d(0x16e)]=_0x323ffa[_0x126c0d(0x16e)];var _0x1c67c0=_0x5cdab8[_0x126c0d(0x1ae)]('2d');_0x1c67c0[_0x126c0d(0x15a)](2.5,2.5);var _0x2dad3d=document[_0x126c0d(0x1bc)]('img');_0x2dad3d['setAttribute'](_0x126c0d(0x15e),_0x126c0d(0x1b8)+btoa(unescape(encodeURIComponent(_0x481065)))),_0x2dad3d[_0x126c0d(0x197)]=function(){var _0x2eeebe=_0x126c0d;_0x1c67c0[_0x2eeebe(0x173)](_0x2dad3d,0x0,0x0);var _0x4bbd77=_0x5cdab8['toDataURL'](_0x2eeebe(0x190),0x1),_0x5797cd='<img\x20src=\x22'+_0x4bbd77+'\x22>',_0x4fead4=document[_0x2eeebe(0x1bc)]('a');_0x4fead4[_0x2eeebe(0x164)]=country_name+_0x2eeebe(0x1a6),_0x4fead4[_0x2eeebe(0x1c3)]=_0x4bbd77,document[_0x2eeebe(0x17b)][_0x2eeebe(0x160)](_0x4fead4),_0x4fead4[_0x2eeebe(0x1a4)]();};}),$(_0x52c642(0x188))['on'](_0x52c642(0x1a4),function(){var _0x2c3d05=_0x52c642;document[_0x2c3d05(0x15d)](_0x2c3d05(0x1cb))['style'][_0x2c3d05(0x167)]=_0x2c3d05(0x198);var _0x216507=document['getElementsByTagName'](_0x2c3d05(0x183))[0x0],_0x4e9185=new XMLSerializer()[_0x2c3d05(0x16c)](_0x216507),_0x39399c=document[_0x2c3d05(0x1bc)](_0x2c3d05(0x176)),_0x36efd5=_0x216507['getBoundingClientRect']();_0x39399c['width']=_0x36efd5[_0x2c3d05(0x163)]*2.5,_0x39399c['height']=_0x36efd5['height']*2.5;var _0x5ab618=_0x39399c['style'][_0x2c3d05(0x163)]=_0x36efd5[_0x2c3d05(0x163)],_0x54b68f=_0x39399c['style']['height']=_0x36efd5['height'],_0xf23ab=_0x39399c[_0x2c3d05(0x1ae)]('2d');_0xf23ab['scale'](2.5,2.5);var _0x49958d=document['createElement'](_0x2c3d05(0x16a));_0x49958d['setAttribute'](_0x2c3d05(0x15e),_0x2c3d05(0x1b8)+btoa(unescape(encodeURIComponent(_0x4e9185)))),_0x49958d[_0x2c3d05(0x197)]=function(){var _0x5e5a8a=_0x2c3d05;_0xf23ab[_0x5e5a8a(0x173)](_0x49958d,0x0,0x0);var _0x67ede3=_0x39399c[_0x5e5a8a(0x184)](_0x5e5a8a(0x190),0x1),_0x2e62b3=new jsPDF('l','mm',[_0x49958d[_0x5e5a8a(0x163)]*1.93,_0x49958d[_0x5e5a8a(0x16e)]*1.96]);_0x2e62b3[_0x5e5a8a(0x15b)](_0x67ede3,_0x5e5a8a(0x162),0xa,0xa,'','','',_0x5e5a8a(0x185)),_0x2e62b3['save'](country_name+_0x5e5a8a(0x1b5));};}),$(_0x52c642(0x1d6))[_0x52c642(0x1a4)](function(){var _0x27831f=_0x52c642,_0x21de4c='';$[_0x27831f(0x1d4)]({'type':_0x27831f(0x1ab),'url':_0x27831f(0x1d5),'data':{'mapid':map_id,'userid':user_id}})[_0x27831f(0x16f)](function(_0x23448e){var _0xf2ca12=_0x27831f;if(_0x23448e==0x1)_0x21de4c='no',alert('Download\x20Limit\x20Exceeded!');else{var _0x4b0b1c=_0xf2ca12(0x18a)+-shadowB*0.7+_0xf2ca12(0x1b2)+shadowB*0.7+_0xf2ca12(0x1a0),_0x1f93d5=document[_0xf2ca12(0x193)](_0xf2ca12(0x183))[0x0],_0x29bc01=new XMLSerializer(),_0x34afed=_0x29bc01[_0xf2ca12(0x16c)](_0x1f93d5);_0x34afed=_0x34afed['replace'](/<defs><filter [\s\S]*?<\/filter><\/defs>/,_0xf2ca12(0x1b9)+_0x4b0b1c+_0xf2ca12(0x15f)),_0x34afed=_0x34afed[_0xf2ca12(0x182)](/style="filter: url([\s\S]*?)"/g,_0xf2ca12(0x1b1));!_0x34afed[_0xf2ca12(0x1ca)](/^<svg[^>]+xmlns="http\:\/\/www\.w3\.org\/2000\/svg"/)&&(_0x34afed=_0x34afed[_0xf2ca12(0x182)](/^<svg/,_0xf2ca12(0x1c0)));_0x34afed=svg_tag+_0x34afed['replace'](/><path/g,_0xf2ca12(0x1d7))[_0xf2ca12(0x182)](/><text/g,_0xf2ca12(0x19b))[_0xf2ca12(0x182)](_0xf2ca12(0x1cd),_0xf2ca12(0x172));map_bg_color!=![]&&(_0x34afed=_0x34afed['replace'](/<path/,_0xf2ca12(0x1c1)+map_bg_color+_0xf2ca12(0x1a2)));var _0x33dfa8='data:image/svg+xml;charset=utf-8,'+encodeURIComponent(_0x34afed);downloadURI(_0x33dfa8,country_name+_0xf2ca12(0x1af));}});});

</script>
