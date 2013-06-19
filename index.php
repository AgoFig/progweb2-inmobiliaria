<!DOCTYPE html>
<html lang="en">
<head>
    <title>Main</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/vegur_400.font.js"></script>
    <script src="js/Vegur_bold_700.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/tms-0.4.x.js"></script>
    <script src="js/jquery.jqtransform.js"></script>
    <script src="js/FF-cash.js"></script>
    <script>
		$(document).ready(function(){
			$('.form-1').jqTransform();					   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:1000,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
    <?php include("php/objetos.php") ?>
<div class="main">
<!--==============================header=================================-->
<header>
    <div>
        <h1><a href="index.html"><img src="images/logo.jpg" alt=""></a></h1>             
        <div class="social-icons">
        <form>
                <input type="text" value="Usuario" />
                <input type="text" value="Clave" />
                <input type="submit" value="Enviar" />
        </form>         
        	<span>Seguinos:</span>
            <a href="https://www.plus.google.com" target="_blank" class="icon-3"></a>
            <a href="https://www.facebook.com" target="_blank" class="icon-2"></a>
            <a href="https://www.twitter.com/" target="_blank" class="icon-1"></a>
        </div>
        <div id="slide">		
            <div class="slider">
                <ul class="items">
                    <li><img src="images/slider-1.jpg" alt="" /></li>
                    <li><img src="images/slider-2.jpg" alt="" /></li>
                    <li><img src="images/slider-3.jpg" alt="" /></li>
                </ul>
            </div>	
            <a href="#" class="prev"></a><a href="#" class="next"></a>
        </div>
        <nav>
            <ul class="menu">
                <li class="current"><a href="index.html">Propiedades</a></li>
                <li><a href="servicios.html">Servicios</a></li>
                <li><a href="sucursales.html">Sucursales</a></li>
                <li><a href="sobre_nosotros.html">Sobre Nosotros</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <!--<li><a href="contacts.html">Contacts</a></li>-->
            </ul>
        </nav>
    </div>
</header>   
<!--==============================content================================-->
<section id="content"><div class="ic"></div>
    <div class="container_12">	
		<div class="grid_8">
        <h2 class="top-1 p3">Bienvenido!</h2>
        <p class="line-1">Con nosotros usted podrá encontrar el inmueble que estaba buscando de una manera eficiente.</p>
        <!--<p class="line-1">Download the basic package of this <a href="http://blog.templatemonster.com/2012/04/09/free-website-template-real-estate-justslider/" target="_blank" class="link">Real Estate Template</a> (without PSD source) that is available for anyone without registration. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the free template ZIP package to be delivered to.</p>-->
        <!--<h2 class="p4">Buyers. Sellers. Proprietors. Agents.</h2>-->

        <h2 class="p3">Ultimas propiedades</h2>
        <!-- Doble columna -->
         <div class="wrap block-2">
        	<div class="ultimas">
        		<a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border img-margin"></a>
        	<h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        	</div>
            <div class="ultimas">
            	<a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border img-margin"></a>
            <h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        </div>
            <div class="ultimas">
            	<a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border img-margin"></a>
            <h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        </div>
           <div class="ultimas">
           	<a href="#" class="last"><img src="images/page2-img4.jpg" alt="" class="img-border img-margin"></a>
           <h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        </div>

        <div class="ultimas">
        		<a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border img-margin"></a>
        	<h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        	</div>
            <div class="ultimas">
            	<a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border img-margin"></a>
            <h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        </div>
            <div class="ultimas">
            	<a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border img-margin"></a>
            <h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        </div>
           <div class="ultimas">
           	<a href="#" class="last"><img src="images/page2-img4.jpg" alt="" class="img-border img-margin"></a>
           <h4 class="">Duplex en palermo</h4>
        	<p>Bellisima propiedad  ubicada en Capital Federal.</p>
        </div>
        </div>

        </div> 


        <div class="wrap block-1">			
			<div class="grid_4">
				<div class="left-1">
					<h2 class="top-1 p3">Buscador</h2>
					<form id="form-1" class="form-1 bot-1">
						<div class="select-1">
							<label>Categoria</label>
							<select name="catego" >
								<option>Todas</option>
								<option>Casas</option>
								<option>Departamentos</option>
								<option>Locales</option>
								<option>Lotes</option>
							</select>   
						</div>
				
						<!-- Este tiene que cambiar en base a la opción anterior -->
						<div class="select-1">
							<label>Tipo</label>
							<select name="tipo" >
								<option>Casas</option>
								<option>Chalets</option>
								<option>Triplex</option>
							</select>   
						</div>
				
						<!--Este div debe quedar deshabilitado si se elige como opción Locales y Lotes-->
						<div class="select-1">
							<label>Ambientes</label>
							<select name="ambientes" >
								<option>Todos</option>
								<option>1 amb.</option>
								<option>2 amb.</option>
								<option>3 amb.</option>
								<option>4 amb.</option>
								<option>mas</option>
							</select>   
						</div>
				
						<div class="select-1">
							<label>Ciudad</label>
							<select name="ciudad" >
								<option>Todas</option>
								<option>Capital Federal</option>
								<option>Gran Buenos Aires</option>
								<!--Los options deberan ser creados dependiendo de las cuidades que esten en la base de datos -->
							</select>   
						</div>
				
						<div class="select-1">
							<label>Operacion</label>
							<select name="operacion" >
								<option>Todos</option>
								<option>Venta</option>
								<option>Alquiler</option>
								<option>Alquiler Temporario</option>
							</select>   
						</div>	

						<div class="select-1">
							<label>Moneda</label>
							  	<input type="radio" checked="" value="todas" name="moneda" id="" /><span>Todas</span>
							  	<input type="radio" value="pesos" name="moneda" id="" /><span>Pesos</span>
							  	<input type="radio" value="dolares" name="moneda" id="" /><span>Dolares</span>
						</div>


						<div class="select-2">
							<label>Precio min.</label>
							<input type="text" name="preciomin" class="precios">	
						</div>
						<div class="select-2 last">
							<label>Precio max.</label>
							<input type="text" name="preciomax" class="precios"> 
						</div>
						<a onClick="document.getElementById('form-1').submit()" class="button">Buscar</a>
						<div class="clear"></div>
					</form>
				</div>
				<?php

        $db = new Bdd();

        $db->recorrerCasas($_REQUEST['catego'],$_REQUEST['tipo'],$_REQUEST['ambientes'],
            $_REQUEST['ciudad'],$_REQUEST['operacion'],$_REQUEST['moneda'],
            $_REQUEST['preciomin'],$_REQUEST['preciomax']);

        ?>
			</div>
			<div class="clear"></div>
		
        </div>
	</div>
	  
	  <!-- DESDE ACA COMIENZA EL BUSCADOR -->
	  
    <!--<div class="grid_4">
        <div class="left-1">
            <h2 class="top-1 p3">Buscador</h2>
            <form id="form-1" class="form-1 bot-1">
                <div class="select-1">
                    <label>Categoria</label>
                    <select name="select" >
                        <option>Todas</option>
						<option>Casas</option>
						<option>Departamentos</option>
						<option>Locales</option>
						<option>Lotes</option>
                    </select>   
                </div>
				
				
				<div class="select-1">
                    <label>Tipo</label>
                    <select name="select" >
                        <option>Casas</option>
						<option>Chalets</option>
						<option>Triplex</option>
                    </select>   
                </div>
				
				
				<div class="select-1">
                    <label>Ambientes</label>
                    <select name="select" >
						<option>Todos</option>
                        <option>1 amb.</option>
						<option>2 amb.</option>
						<option>3 amb.</option>
						<option>4 amb.</option>
						<option>mas</option>
                    </select>   
                </div>
				
                <div>
                    <label>Ciudad</label>
					<select name="select" >
                        <option>Todas</option>
						<option>Capital Federal</option>
						<option>Gran Buenos Aires</option>
						
                    </select>   
                   
                </div>
				
				<div class="select-1">
                    <label>Operacion</label>
                    <select name="select" >
						<option>Todos</option>
                        <option>Venta</option>
						<option>Alquiler</option>
						<option>Alquiler Temporario</option>
                    </select>   
                </div>
				
				<div>
                    <label>Moneda</label>
                    <input type="radio" name="moneda" value="pesos" checked> Pesos <br/>
					<input type="radio" name="moneda" value="dolares"> Dolares 
                </div>
				
                <div class="select-2">
                    <label>Beds</label>
                    <select name="select" >
                        <option>&nbsp;</option>
                    </select>   
                </div>
                <div class="select-2 last">
                    <label>Baths</label>
                    <select name="select" >
                        <option>&nbsp;</option>
                    </select>   
                </div> 
                <a onClick="document.getElementById('form-1').submit()" class="button">Buscar</a>
                <div class="clear"></div>
            </form>
        </div>
      </div>-->
      <div class="clear"></div>
    </div>  
</section> 
</div>    
<!--==============================footer=================================-->
    <footer>
        <p>© 2013 Mi Inmobiliaria</p>
        <p>Website made by Paula and Agostina</p>
		<!--<p>Busque m&aacute;s plantillas web gratis <a href="http://www.mejoresplantillasgratis.es" target="_blank">en MPG.es</a>.</p>-->
    </footer>	    
<script>
	Cufon.now();
</script>
</body>
</html>