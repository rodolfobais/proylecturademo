<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//include_once 'classes/dataBase.class.php';
$db = new dataBase('');
$sql = "SELECT id, nombre FROM libro"; 
//$result = $db -> QueryFetchArrayASSOC($sql);
//echo "<pre>"; print_r($result);echo "</pre>";
/*
array[0][id] -> 1
array[0][nombre] -> el lago de los cisnes


array[1][id] -> 1234543654765
array[1][nombre] -> libro 1342
*/


 
@session_start();
if(!isset($_SESSION['login']) || $_SESSION['login']==0){
header('Location:clients.php');
}else{
session_start(); 
if(isset($_GET['close']) and $_GET['close']==1){ // si vino la variable por get, destruye las variables de session
	$_SESSION['login']=0;
	$_SESSION['usuario']=''; 
	session_destroy();
}




$arrSliderHeader = array();
$pos = 0;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas recomendado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;

$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas descargado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;


$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Ultimos publicados";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;


$slider = '';
foreach ($arrSliderHeader as $key => $value) {
	$slider .= '
	<li>	
		<table>
			<tr><td colspan = 3><h4>'.$value['titulo'].'</h4></td></tr>
      		<tr>
      			<td>
	    			<a class="fancybox-manual-b" href="javascript:;" name="1"><img  src="'.$value['contenido_0']['img'].'"></a><br/><p>'.$value['contenido_0']['txt'].'</p>		
	    		</td>
	    		<td>
	    			<img src="'.$value['contenido_1']['img'].'"><br/><p>'.$value['contenido_1']['txt'].'</p>		
	    		</td>
	      		<td>
	      			<img src="'.$value['contenido_2']['img'].'"><br/><p>'.$value['contenido_2']['txt'].'</p>		
	      		</td>
	   		</tr>
   		</table>
	</li>';
}

$sql = "SELECT nombre FROM libro";
$misTrabajosArr = $db -> QueryFetchArrayASSOC($sql);
$misTrabajos = '<ul style = "list-style-type: circle;">';
foreach ($misTrabajosArr as $key => $value) {
	$misTrabajos .= '
	<li>
		<a href="#">'.$value['nombre'].'</a>
	</li>';
}
$misTrabajos .= '</ul>';
//echo "<pre>"; print_r($misTrabajosArr);echo "</pre>";
include('php/servicio.php');
include_once('php/Audiolibro.php');
include_once('php/Registro.php');
?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Proyecto lectura</title>
        
      

		<link href="web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="legend iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="text/javascript" src="web/js/fancylibro.js"></script>
		<link href='web/css/font-Ropa+Sans.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="web/css/responsiveslides.css">
		<script src="web/js/jquery.min.js"></script>
        <script type="text/javascript" src="/proylecturademo/web/js/ajax.js"></script>
            <script type="text/javascript" src="/proylecturademo/web/js/footer.js"></script>
            <script type="text/javascript" src="/proylecturademo/web/js/crearlista.js"></script>
            <script type="text/javascript" src="/proylecturademo/web/js/buscarUsuarios.js"></script>
        
        
        
		<script src="web/js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600, speed: 600
			      });
			});
		  </script>
	</head>
	<body>
		<!---start-wrap---->
		
			<!---start-header---->
			<div class="header">
				<div class="wrap">
				<!---start-logo---->
				      <div class="logo">
					      <a href="index.html">
					      	<img src="web/images/logoPL.png" title="logo" height = 50 />
				      	</a>
				      </div>
				      <!---end-logo---->
				      <!---start-search---->
				      <div class="top-search-bar">
					      <div class="header-top-nav">
						      <ul>
							      <li><a href="#"> <span  class="botones">Login</span></a></li>
							      <li><a href="#"> <span  class="botones">Registrese</span></a></li>
							      <li><a href="#"> <span  class="botones">Mensajes</span></a></li>
						      </ul>
					      </div>
				      </div>
				      <div class="clear"> </div>
				</div>
			</div>
				<div class="clear"> </div>
				<div class="header-nav">
					<div class="wrap">
					<div class="left-nav">
						<ul>
							<li class="active"><a href="web/index.php">Inicio</a></li>
							<li><a href="web/about.php">Centro de Redaccion</a></li>
							<li><a href="web/clients.php">Audiolibros</a></li>
							<li><a href="web/services.php">Social</a></li>
							<li><a href="web/contact.php">Administrador</a></li>
						</ul>
					</div>
					<!--
					<div class="right-social-icons">
						<ul>
							<li><a class="icon1" href="#"> </a></li>
							<li><a class="icon2" href="#"> </a></li>
							<li><a class="icon3" href="#"> </a></li>
							<li><a class="icon4" href="#"> </a></li>
						</ul>
					</div>
					-->
					<div class="clear"> </div>
				</div>
				<!---start-search---->
			</div>
			<!---end-header---->
			<!--start-image-slider---->
			<div class="wrap">
					<div class="image-slider">
						<!-- Slideshow 1 
						<div style="height: 200px;">Slider de no me acuerdo que</div>
						-->
					    <ul class="rslides" id="slider1">
					      	<?php echo $slider; ?>
					    </ul>
					    
					    
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					<!---start-content---->
					<div class="content">
						<div class="section group">
						<div class="grid_1_of_4 images_1_of_4">
							<h4>Mis trabajos</h4>
							 <?php echo $misTrabajos; ?>
						     <div class="button"><span></span></div>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<h4>Mi biblioteca</h4>
							 <!--<img src="web/images/g2.jpg"> -->
							  
							 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						     <div class="button"><span></span></div>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<h4>Notificaciones</h4>
							 <!--<img src="web/images/g1.jpg"> -->
							 
							 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						     <div class="button"><span></span></div>
						</div>
						<div class="grid_1_of_4 images_1_of_4 services">
							<h4>Clasificados</h4>
							<ul>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
								<li><a href="#"><img src="web/images/marker2.jpg" title="pointer "/>Duis aute irure dolor in reprehen</a></li>
							</ul>
						</div>
					</div>
					<div class="image group">
						<div class="grid span_2_of_3">
							<h3>Lorem Ipsum is simply dummy text </h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>
							<div class="button"><span><a href="#">Read More</a></span></div>
						</div>
						<div class="grid images_3_of_1">
							<h3>Testimonials</h3>
							<p><img src="web/images/quotes_alt.png"> &nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							<a href="#">- Lorem ipsum.<span>Usa</span></a>
						</div>
					</div>
				</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
					<div class="footer"> 
						<div class="wrap"> 
						<div class="footer-left">
							Users online: pepe argento | Juana de arco | Jorgito
						</div>
						<div class="footer-right">
							<p>REPRODUCTOR (no asociado al aparato)</p>
						</div>
						<div class=="clear"> </div>
					</div>
					<div class="clear"> </div>
		<!---end-wrap---->
		</div>
	</body>
</html>

