<?php
error_reporting(E_ALL);

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



$arrSliderHeader = array();
$pos = 0;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas recomendado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a33.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Inspirada en el universo de Star Trek, viajeros perdidos en un planeta desconocido";
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a22.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Ensayo de materiales de PVC para utilizacion en laboratorio de microbiologia";
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a11.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Proyecto de educacion de la ciudad de mexico, material docente de calidad educativa";

$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas descargado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a22.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Ensayo de materiales de PVC para utilizacion en laboratorio de microbiologia".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a33.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Inspirada en el universo de Star Trek, viajeros perdidos en un planeta desconocido";
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a11.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Proyecto de educacion de la ciudad de mexico, material docente de calidad educativa";


$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Ultimos publicados";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a11.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Proyecto de educacion de la ciudad de mexico, material docente de calidad educativa ";
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a22.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Ensayo de materiales de PVC para utilizacion en laboratorio de microbiologia ";
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "/proylecturademo/web/images/a33.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "Inspirada en el universo de Star Trek, viajeros perdidos en un planeta desconocido";


$slider = '';
foreach ($arrSliderHeader as $key => $value) {
	$slider .= '
	<li>	
		<table>
			<tr><td colspan = 3><h3>'.$value['titulo'].'</h3></td></tr>
      		<tr>
      			<td>
	    			<a class="fancybox-manual-b" href="javascript:;" name="1"><img  src="'.$value['contenido_0']['img'].'"></a><br/><p>'.$value['contenido_0']['txt'].'</p>		
	    		</td>
	    		<td>
	    			<a class="fancybox-manual-x" href="javascript:;" name="1"><img src="'.$value['contenido_1']['img'].'"></a><br/><p>'.$value['contenido_1']['txt'].'</p>		
	    		</td>
	      		<td>
	      			<a class="fancybox-manual-y" href="javascript:;" name="1"><img src="'.$value['contenido_2']['img'].'"></a><br/><p>'.$value['contenido_2']['txt'].'</p>		
	      		</td>
	   		</tr>
   		</table>
	</li>';
}

$sql = "SELECT nombre FROM libro";
//$misTrabajosArr = $db -> QueryFetchArrayASSOC($sql);
$misTrabajos = array();//'<ul style = "list-style-type: circle;">';
foreach ($misTrabajosArr as $key => $value) {
	$misTrabajos .= '
	<li>
		<a href="#">'.$value['nombre'].'</a>
	</li>';
}
$misTrabajos .= '</ul>';
//echo "<pre>"; print_r($misTrabajosArr);echo "</pre>";
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
        <script src="/proylecturademo/web/js/jquery.min.js"></script>


	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/proylecturademo/web/vistalibro/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/proylecturademo/web/vistalibro/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/proylecturademo/web/vistalibro/source/jquery.fancybox.css?v=2.1.5" media="screen" />
      

		<link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="legend iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="text/javascript" src="/proylecturademo/web/js/fancylibro.js"></script>
        
		<link href='/proylecturademo/web/css/font-Ropa+Sans.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/proylecturademo/web/css/responsiveslides.css">
		
		<script src="/proylecturademo/web/js/responsiveslides.min.js"></script>
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
					      	<img style="max-width:100%;" src="/proylecturademo/web/images/logoPL.png" title="logo" height = 50 />
				      	</a>
				      </div>
				      <!---end-logo---->
				      <!---start-search---->
				      <div class="top-search-bar">
					      <div class="header-top-nav">
						      <ul>
							      <li><a href="#"><img src="/proylecturademo/web/images/marker1.png" title="Mensajes" />Mensajes</a></li>
							      <li><a href="login">Logout</a></li>
						      </ul>
					      </div>
				      </div>
				      <div class="clear"> </div>
				</div>
			</div>
				<div class="clear"> </div>
				<?php include("menu.php"); ?>
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
                            <ul>
                                <li><a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Proyecto 1</a></li>
								<li><a href="#"><img  title="pointer "/>Proyecto 2</a></li>
								<li><a href="#"><img  title="pointer "/>Proyecto 3</a></li>
								<li><a href="#"><img  title="pointer "/>Proyecto 4</a></li>
								<li><a href="#"><img  title="pointer "/>Proyecto 5</a></li>
								<li><a href="#"><img  title="pointer "/>Proyecto 6</a></li>
                                
                            </ul>
							 <?php echo $misTrabajos; ?>
						     <div class="button"><span></span></div>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<h4>Mi biblioteca</h4>
                            <li><a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Libro Negro de la costura</a></li>
								<li><a href="#"><img  title="pointer "/>El ultimo de los programadores</a></li>
								<li><a href="#"><img  title="pointer "/>Ensayo: Resistencia de la gelatina</a></li>
								<li><a href="#"><img  title="pointer "/>Como programar y no morir virgen</a></li>
								<li><a href="#"><img  title="pointer "/>Todo sobre la Jardineria</a></li>
								<li><a href="#"><img  title="pointer "/>Como Mandar una sonda a Pluton</a></li>
							 
						     <div class="button"><span></span></div>
						</div>
						<div class="grid_1_of_4 images_1_of_4">
							<h4>Notificaciones</h4>
                            <ul>
				                <li><a class="fancybox-manual-z" href="javascript:;" name="1"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Rodolfo Bais</a> Comentó <a class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>El ultimo de los programadores</a></li></li>
				                <li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Cristian Ancutza</a> Votó <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Libro Negro de la costura</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Jorge Miranda</a> Compartió <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Libro Negro de la costura</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Esteban Quito</a> Votó <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Como Mandar una sonda a Pluton</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Enzo Franchescoli</a> Comentó <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Como programar y no morir virgen</a></li>
                            </ul>
						     
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
								
							</ul>
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