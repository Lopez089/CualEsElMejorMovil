<!doctype html>
	<html lang="es">
		<head>
			<title>Comparador de móviles ComPreBajo</title>
			<meta charset="UTF-8">
			<meta name="Description" content="Comprebajo el comparador de móviles." />
			<meta name="keywords" content="comparador de móviles, comparador de precios moviles, comparativas móviles, comparador telefonos moviles, comparador de moviles "/>
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
			<meta name="google-site-verification" content="xLkXqAYUYldWMCyDvyJhBZ1pA2Cz6rJwMhG57KLN5vg" />
			<link rel="shortcut icon" type="image/x-icon" href="/imag/logo.ico" />
			<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
			<link href="css/normalize.css" rel="stylesheet">
			<link rel="stylesheet" href="css/estilos.css">
			<link rel="stylesheet" href="css/movil-vercial.css" media="only screen and (max-width:479px)">
			<link rel="stylesheet" href="css/movil-horizontal.css" media="only screen and (min-width: 480px) and (max-width: 767px)">
			<link rel="stylesheet" href="css/tablet-vertival.css" media="only screen and (min-width: 678px) and (max-width: 1023px)">
			<link rel="stylesheet" href="css/escritorio-tablet-hori.css" media="only screen and (min-width: 1024px)">
			<link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
			<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			  ga('create', 'UA-62842568-1', 'auto');
			  ga('send', 'pageview');

			</script>
			<script src="js/jquery.js"></script>
			<script src="js/script.js"></script>

		</head>
		<body>
		<div id="fondo">
			<div id="menu-des-contenedor">
				<div class="menu-des container">
					<span id="remove" class="glyphicon glyphicon-remove"></span>
					<ul class="col-md-4 col-sm-4 col-xs-6 col-md-offset-4 col-sm-offset-4 col-xs-offset-3">
						<li><span class="glyphicon glyphicon-home"></span></li><a href="#header" onClick="ga('send','event', 'botones','home')">Home</a>
						<li><span class="glyphicon glyphicon-heart-empty"></span></li><a href="#about" onClick="ga('send','event', 'botones','SobreNosotos')">Sobre nosotros</a>
						<li><span class="glyphicon glyphicon-phone"></span></li><a href="#portafolios" onClick="ga('send','event', 'botones','Servicios')">Servicios</a>
						<li><span class="glyphicon glyphicon-envelope"></span></li><a href="#contacto" onClick="ga('send','event', 'botones','Contacto')">Contacto</a>
					</ul> 
				</div><!-- fin del menu despegable -->
			</div><!-- fin del contenedo menu despegable -->
			<div class="clearfix">	</div>

			<header id="header">
				<div id="header-container" class="container">
					<nav class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-xs-2 col-md-2">
							<div id="logo"><p>C</p></div>
						</div>
						<div class="col-xs-1 col-md-1 col-md-offset-9 navegacion">
							<span id="navegador" class="glyphicon glyphicon-align-justify icon-white" onClick="ga('send','event', 'botones','menu')"></span>
						</div>
					</nav>
					<div class="clearfix">	</div>
					<form  name="comparadorComprebajo" method="post">
					<div id="header-cont" class="">
						<h1 class="col-md-12 col-sm-12 col-xs-12">Compara telefonos moviles</h1>
					
						<div id="AgregarMovil" class="row">
							<div class="moviles col-md-2 col-sm-2 col-xs-2 col-md-offset-3 col-md-offset-4 col-sm-offset-4 col-xs-offset-4" >
								<span class="iconoMovil"></span>
								<p>Añadir móvil</p>
								<label class="marca"  >Modelo</label>
								<input class="input_marca" name="modelo1" type="text">
							</div>
							<div class="moviles col-md-2 col-sm-2 col-xs-2">
								<span class="iconoMovil"></span>
								<p>Añadir móvil</p>
								<label class="marca" >Modelo</label>
								<input class="input_marca" name="modelo2" type="text">
							</div>
							<div class="moviles col-md-2 col-sm-2 col-xs-2">
								<span class="iconoMovil"></span>
								<p>Añadir móvil</p>
								<label class="marca" >Modelo</label>
								<input class="input_marca" name="modelo3" type="text">
							</div>
							<div class="moviles col-md-2 col-sm-2 col-xs-2">
								<span class="iconoMovil"></span>
								<p>Añadir móvil</p>
								<label class="marca" >Modelo</label>
								<input class="input_marca"  name="modelo4" type="text">
							</div>
							
						</div>
								<button type="submit" class="btn boton_comparar">Comparar Moviles</button>
						</div><!-- fin del div header-cont -->
						
  				</form>
						<div class="clearfix">	</div>		
					
										
<?php
$modelo1="";
$modelo1=$_POST['modelo1'];

$modelo2="";
$modelo2=$_POST['modelo2'];

$modelo2="";
$modelo2=$_POST['modelo2'];

$modelo3="";
$modelo3=$_POST['modelo3'];

$modelo4="";
$modelo4=$_POST['modelo4'];

mysql_connect("db578341037.db.1and1.com","dbo578341037","123456789j");
mysql_select_db(db578341037);

if ($modelo1!="") {
	$busqueda1=mysql_query("SELECT * FROM `TelefonosMoviles` WHERE modelo LIKE '%".$modelo1."%'");
}
if($modelo2!="") {
	$busqueda2=mysql_query("SELECT * FROM `TelefonosMoviles` WHERE modelo LIKE '%".$modelo2."%'");
}

if($modelo3!="") {
	$busqueda3=mysql_query("SELECT * FROM `TelefonosMoviles` WHERE modelo LIKE '%".$modelo3."%'");
}

if($modelo4!="") {
	$busqueda4=mysql_query("SELECT * FROM `TelefonosMoviles` WHERE modelo LIKE '%".$modelo4."%'");
}
	while ($m1=mysql_fetch_array($busqueda1)) {
		while ($m2=mysql_fetch_array($busqueda2)) {
			while ($m3=mysql_fetch_array($busqueda3)) {
				while ($m4=mysql_fetch_array($busqueda4)) {
							echo '<div id="comparacion" class="row">
											<table class="table table-hover">
												<thead>
													<tr >
											            <th class="col-md-4 col-sm-4 col-xs-4" id="img-movil"></span></th>
											            <th class="col-md-2 col-sm-2 col-xs-2 img-telefono"><span class="img-telefono"></span></th>
											            <th class="col-md-2 col-sm-2 col-xs-2 img-telefono"><span class=""></span></th>
											            <th class="col-md-2 col-sm-2 col-xs-2 img-telefono"><span class=""></span></th>
											            <th class="col-md-2 col-sm-2 col-xs-2 img-telefono"><span class=""></span></th>
											        </tr>
											        <tr>
											            <th class="col-md-4 col-sm-4 col-xs-4"></th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m1[modelo].'</th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m2[modelo].'</th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m3[modelo].'</th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m4[modelo].'</th>
											        </tr>
											        <tr>
											            <th class="col-md-4 col-sm-4 col-xs-4"></th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m1[marca].'</th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m2[marca].'</th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m3[marca].'</th>
											            <th class="col-md-2 col-sm-2 col-xs-2">'.$m4[marca].'</th>
											        </tr>
											    </thead>
 												<tbody>
												  <thead>
												  	<tr>
											            <th class="">MATERIALES Y DESEÑO</th>  
											        </tr>
												  </thead> 
												  <tr>
												    <td class="">TAMAÑO</td>
												    <td class="">'.$m1[tamano].'</td>
												    <td class="">'.$m2[tamano].'</td>
												    <td class="">'.$m3[tamano].'</td>
												    <td class="">'.$m4[tamano].'</td>
												  </tr>
												  <tr>
												    <td class="">PESO</td>
												    <td class="">'.$m1[peso].'</td>
												    <td class="">'.$m2[peso].'</td>
												    <td class="">'.$m3[peso].'</td>
												    <td class="">'.$m4[peso].'</td>
												  </tr>
												  <tr>
												   <td class="">MATERIAL</td>
												    <td class="">'.$m1[material].'</td>
												    <td class="">'.$m2[material].'</td>
												    <td class="">'.$m3[material].'</td>
												    <td class="">'.$m4[material].'</td>
												  </tr>	
												   <td class="">PANTALLA</td>
												    <td class="">'.$m1[pantalla].'</td>
												    <td class="">'.$m2[pantalla].'</td>
												    <td class="">'.$m3[pantalla].'</td>
												    <td class="">'.$m4[pantalla].'</td>
												  </tr>		 								
												</tbody>
												<thead>
												  	<tr>
											            <th class="">HARDWARE Y POTENCIA</th>  
											        </tr>
												  </thead> 
												  <tr>
												    <td class="">PROCESADOR</td>
												    <td class="">'.$m1[procesador].'</td>
												    <td class="">'.$m2[procesador].'</td>
												    <td class="">'.$m3[procesador].'</td>
												    <td class="">'.$m4[procesador].'</td>
												  </tr>
												  <tr>
												    <td class="">RAM</td>
												    <td class="">'.$m1[ram].'</td>
												    <td class="">'.$m2[ram].'</td>
												    <td class="">'.$m3[ram].'</td>
												    <td class="">'.$m4[ram].'</td>
												  </tr>
												  <tr>
												   <td class="">ALMACENAMIENTO</td>
												    <td class="">'.$m4[almacenamiento].'</td>
												    <td class="">'.$m4[almacenamiento].'</td>
												    <td class="">'.$m4[almacenamiento].'</td>
												    <td class="">'.$m4[almacenamiento].'</td>
												  </tr>	
												   <td class="">AMPLIABLE</td>
												    <td class="">'.$m4[ampliable].'</td>
												    <td class="">'.$m4[ampliable].'</td>
												    <td class="">'.$m4[ampliable].'</td>
												    <td class="">'.$m4[ampliable].'</td>
												  </tr>	
												  <thead>
												  	<tr>
											            <th class="">CAMARA</th>  
											        </tr>
												  </thead> 
												  <tr>
												    <td class="">RESOLUCION</td>
												    <td class="">'.$m1[resolucion].'</td>
												    <td class="">'.$m2[resolucion].'</td>
												    <td class="">'.$m3[resolucion].'</td>
												    <td class="">'.$m4[resolucion].'</td>
												  </tr>
												  <tr>
												    <td class="">FLASH</td>
												    <td class="">'.$m1[flash].'</td>
												    <td class="">'.$m2[flash].'</td>
												    <td class="">'.$m3[flash].'</td>
												    <td class="">'.$m4[flash].'</td>
												  </tr>
												  <tr>
												   <td class="">RESOLUCION SELFIE</td>
												    <td class="">'.$m1[resolucionSelfie].'</td>
												    <td class="">'.$m2[resolucionSelfie].'</td>
												    <td class="">'.$m3[resolucionSelfie].'</td>
												    <td class="">'.$m4[resolucionSelfie].'</td>
												  </tr>	 
												    	 								
												</tbody><thead>
												  	<tr>
											            <th class="">CONECTIVIDAD</th>  
											        </tr>
												  </thead> 
												  <tr>
												  	<td class="">4G LTE</td>
												    <td class="">'.$m1[4g].'</td>
												    <td class="">'.$m2[4g].'</td>
												    <td class="">'.$m3[4g].'</td>
												    <td class="">'.$m4[4g].'</td>
												  </tr>
												  <tr>
												 	 <td class="">3G</td>
												    <td class="">'.$m1[3g].'</td>
												    <td class="">'.$m2[3g].'</td>
												    <td class="">'.$m3[3g].'</td>
												    <td class="">'.$m4[3g].'</td>
												  </tr>
												  <tr>
												   <td class="">TARJETA SIM</td>
												    <td class="">'.$m1[tarjetaSim].'</td>
												    <td class="">'.$m2[tarjetaSim].'</td>
												    <td class="">'.$m3[tarjetaSim].'</td>
												    <td class="">'.$m4[tarjetaSim].'</td>
												  </tr>	 
												  <tr>
												   <td class="">WIFI</td>
												    <td class="">'.$m1[wifi].'</td>
												    <td class="">'.$m2[wifi].'</td>
												    <td class="">'.$m3[wifi].'</td>
												    <td class="">'.$m4[wifi].'</td>
												  </tr>	 
												  <tr>
												   <td class="">BLUETOOTH</td>
												    <td class="">'.$m1[bluetooth].'</td>
												    <td class="">'.$m2[bluetooth].'</td>
												    <td class="">'.$m3[bluetooth].'</td>
												    <td class="">'.$m4[bluetooth].'</td>
												  </tr>	 
												  <tr>
												   <td class="">AUDIO JACK</td>
												    <td class="">'.$m1[audiojack].'</td>capacidad
												    <td class="">'.$m2[audiojack].'</td>
												    <td class="">'.$m3[audiojack].'</td>
												    <td class="">'.$m4[audiojack].'</td>
												  </tr>	
												  <thead>
												  	<tr>
											            <th class="">BATERIA</th>  
											        </tr>
												  </thead> 
												  <tr>
												    <td class="">CAPACIDAD</td>
												    <td class="">'.$m1[capacidad].'</td>
												    <td class="">'.$m2[capacidad].'</td>
												    <td class="">'.$m3[capacidad].'</td>
												    <td class="">'.$m4[capacidad].'</td>
												  </tr>
												  <tr>
												    <td class="">EXTRAIBLE</td>
												    <td class="">'.$m1[extraible].'</td>
												    <td class="">'.$m2[extraible].'</td>
												    <td class="">'.$m3[extraible].'</td>
												    <td class="">'.$m4[extraible].'</td>
												  </tr>
												  <tr>
												   <td class="">HORAS APROX. STANDBY </td>
												    <td class="">'.$m1[horasStandby].'</td>
												    <td class="">'.$m2[horasStandby].'</td>
												    <td class="">'.$m3[horasStandby].'</td>
												    <td class="">'.$m4[horasStandby].'</td>
												  </tr>	 
												  <tr>
												   <td class="">HORAS APROX. NAVEGACION WEB</td>
												    <td class="">'.$m1[horasNavegacion].'</td>
												    <td class="">'.$m2[horasNavegacion].'</td>
												    <td class="">'.$m3[horasNavegacion].'</td>
												    <td class="">'.$m4[horasNavegacion].'</td>
												  </tr>	 
												  <tr>
												   <td class="">HORAS APROX. MUSICA</td>
												    <td class="">'.$m1[horasmusica].'</td>
												    <td class="">'.$m2[horasmusica].'</td>
												    <td class="">'.$m3[horasmusica].'</td>
												    <td class="">'.$m4[horasmusica].'</td>
												  </tr>	 
												  <tr>
												   <td class="">HORAS APROX. TELEFONO</td>
												    <td class="">'.$m1[horastelefono].'</td>
												    <td class="">'.$m2[horastelefono].'</td>
												    <td class="">'.$m3[horastelefono].'</td>
												    <td class="">'.$m4[horastelefono].'</td>
												  </tr>	
												  <tr>
												   <td class="">HORAS APROX. GRABACION DE VIDEO</td>
												    <td class="">'.$m1[horasvideo].'</td>
												    <td class="">'.$m2[horasvideo].'</td>
												    <td class="">'.$m3[horasvideo].'</td>
												    <td class="">'.$m4[horasvideo].'</td>
												  </tr>	
												  <thead>
												  	<tr>
											            <th class="">SOFTWARE</th>  
											        </tr>
												  </thead> 
												  <tr>
												    <td class="">SISTEMA OPERATIVO</td>
												    <td class="">'.$m1[sistemaOperativ].'</td>
												    <td class="">'.$m2[sistemaOperativ].'</td>
												    <td class="">'.$m3[sistemaOperativ].'</td>
												    <td class="">'.$m4[sistemaOperativ].'</td>
												  </tr> 
												  <thead>
												  	<tr>
											            <th class="">COMPARAR PRECIOS</th>  
											        </tr>
												  </thead> 
												  <tr>
												    <td class="">Media markt</td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												  </tr>  
												  <tr>
												    <td class="">ebay</td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												  </tr>   
												  <tr>
												    <td class="">amazon</td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												  </tr>  
												   <tr>
												    <td class="">Redcoon</td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												  </tr>  	  	
												  <tr>
												    <td class="">rakuten</td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												    <td class=""><a href="#">200€</a></td>
												  </tr>
											</table>
													


										</div>';
									};
									};
									};
									};
?>





										


										
  										<div class="clearfix">	</div>	
  					
  					
				</div><!-- fin del div header-container	 -->
					
			</header><!-- fin del header -->
		</div>
		</body>
	</html>