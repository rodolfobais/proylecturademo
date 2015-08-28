<?php
<<<<<<< HEAD
session_start();

$conn = mysql_connect("localhost","root","");
mysql_select_db("librofinal",$conn);


=======
>>>>>>> 746143a734a422cb1d6c1327f1aaa1ef4a947ac3
error_reporting(E_ALL);

//include_once 'classes/dataBase.class.php';
$db = new dataBase('');
$sql = "SELECT id, descrp FROM slider_categ"; 
$slider_categ = $db -> QueryFetchArrayASSOC($sql);
//echo "<pre>"; print_r($slider_categ);echo "</pre>";die;
$slider = '';
foreach ($slider_categ as $value) {
	$sql = "SELECT s.id, l.image, l.sinopsis, l.nombre
			FROM slider_mae AS s
			INNER JOIN libro l ON s.id_libro = l.id 
			WHERE categoria = '".$value['id']."' 
<<<<<<< HEAD
			ORDER BY posicion ASC";
	$slider_mae = $db -> QueryFetchArrayASSOC($sql);
	//echo "<pre>"; print_r($slider_mae);echo "</pre>";
	$slider .= '
	<li>
		<table cellpadding="50">
			<tr><td colspan = 3><center><h1>'.$value['descrp'].'</h1></center></td></tr>
			<tr>';
	foreach ($slider_mae as $value2) {
		$slider .= '
				<td>
					<center>
						<a href="#" onclick = "abrirfancy(\''.$value2['id'].'\', \'vistalibro\')" name="1"><img  src="'.$value2['image'].'"></a><br/><p style="width: 90%"><b style="font-weight: bold;">'.$value2['nombre'].': </b>'.$value2['sinopsis'].'</p>
					</center>
				</td>';
	}	
	$slider .= '
			</tr>
		</table>
=======
			ORDER BY posicion ASC";
	$slider_mae = $db -> QueryFetchArrayASSOC($sql);
	//echo "<pre>"; print_r($slider_mae);echo "</pre>";
	$slider .= '
	<li>
		<table cellpadding="50">
			<tr><td colspan = 3><center><h1>'.$value['descrp'].'</h1></center></td></tr>
			<tr>';
	foreach ($slider_mae as $value2) {
		$slider .= '
				<td>
					<center>
						<a href="#" onclick = "abrirfancy(\''.$value2['id'].'\', \'vistalibro\')" name="1"><img  src="'.$value2['image'].'"></a><br/><p style="width: 90%"><b style="font-weight: bold;">'.$value2['nombre'].': </b>'.$value2['sinopsis'].'</p>
					</center>
				</td>';
	}	
	$slider .= '
			</tr>
		</table>
>>>>>>> 746143a734a422cb1d6c1327f1aaa1ef4a947ac3
	</li>';
}
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
	<script src="/proylecturademo/web/js/functions.js"></script>
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
					      <a href="/proylecturademo/">
					      	<img style="max-width:100%;" src="/proylecturademo/web/images/logoPL.png" title="logo" height = 50 />
				      	</a>
				      </div>
				      <!---end-logo---->
				      <!---start-search---->
				      <div class="top-search-bar">
					      <div>Bienvenido - <?php if (isset($_SESSION['login_user'])){ echo $_SESSION['login_user'];}else if (isset($_COOKIE[$cookie_user])){ echo $_COOKIE[$cookie_user];}?></div>
						    
					      <div class="header-top-nav">
					      	  <ul>
						      	  <li><a href="#" onclick = "abrirfancy('mensajes', 'mensajes-fancy')"><span  class="botones">Mensajes</span></a></li>
							      <li><a href="login"><span  class="botones">Logout</span></a></li>
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
				                <li><a class="fancybox-manual-z" href="javascript:;" name="1"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Rodolfo Bais</a> Coment&oacute; <a class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>El ultimo de los programadores</a></li></li>
				                <li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Cristian Ancutza</a> Vot&oacute; <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Libro Negro de la costura</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Jorge Miranda</a> Comparti&oacute; <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Libro Negro de la costura</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Esteban Quito</a> Vot&oacute; <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Como Mandar una sonda a Pluton</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Enzo Franchescoli</a> Coment&oacute; <a  class="fancybox-manual-b" href="javascript:;" name="1"><img  title="pointer "/>Como programar y no morir virgen</a></li>
                            </ul>
						     
						</div>
						<div class="grid_1_of_4 images_1_of_4 services">
							<h4>Clasificados</h4><span class="button"><a style="background: #AB7A20;" href="#" onclick = "abrirfancy('clasificados', 'nuevo-clasificado-fancy')">Nuevo clasificado</a></span>
							<ul>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Martin: Alguien quiere participar en una investigaci&oacute;n sobre nahuelito?</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Jorge Miranda: Necesito ayuda en un cuento sobre la historia de la UNLaM, alg&uacute;n interesado?</a></li>
							</ul>
						</div>
					</div>
					
				</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
				
				<?php include 'footerlogueado.php';?>
	</body>
</html>