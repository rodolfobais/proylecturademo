<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
/*
//include_once 'classes/dataBase.class.php';
$db = new dataBase('');
$sql = "SELECT id, nombre FROM libro"; 
*/
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Proyecto lectura</title>

        <script src="/proylecturademo/web/js/jquery.min.js"></script>


	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="/proylecturademo/web/vistagridusuario/lib/jquery.mousewheel-3.0.6.pack.js"></script>

	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="/proylecturademo/web/vistagridusuario/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/proylecturademo/web/vistagridusuario/source/jquery.fancybox.css?v=2.1.5" media="screen" />

		<link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="legend iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<script type="text/javascript" src="/proylecturademo/web/js/fancylibro.js"></script>

		<link href='/proylecturademo/web/css/font-Ropa+Sans.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/proylecturademo/web/css/responsiveslides.css">
		
		<link rel="stylesheet" href="/proylecturademo/web/css/login-style.css">
		

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
					      <a href="/proylecturademo/">
					      	<img src="/proylecturademo/web/images/logoPL.png" title="logo" height = 50 />
				      	</a>
				      </div>
				      <!---end-logo---->
				      <!---start-search---->
				      <div class="top-search-bar">
					      <div class="header-top-nav">
						      <ul>
							      <li><a href="/proylecturademo"><img src="/proylecturademo/web/images/marker1.png" title="livehelp" />Logout</a></li>
							      <li><a href="#"><img src="/proylecturademo/web/images/marker1.png" title="customer report" />Mensajes</a></li>
						      </ul>
					      </div>
				      </div>
				      <div class="clear"> </div>
				</div>
			</div>
				<div class="clear"> </div>
				<?php include_once 'menu.php' ?>
			<!---end-header---->
			<!--start-image-slider---->
			<div class="wrap">
		
					<!--End-image-slider---->
					<!---start-content---->
					<div class="content">

							<h4 class="titulo"> Administrador</h4>
								<div class="seccion1_b">	
										<h4 class="innertitle"> Administrar</h4><br><br><br>

									    <ul>

									  <!--  <li class="link"><a a class="fancybox-manual-z" href="javascript:;" name="1"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Usuarios</a></li>
											<img class="grilla" src="/proylecturademo/web/images/grillausuario.png">

										<li class="link"><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Libros</a></li>
											<img class="grilla" src="/proylecturademo/web/images/grillalibro.png">
									-->

										<li class="link"><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Generos</a></li>
											<img class="grilla" src="/proylecturademo/web/images/grillagenero.png">


										<li class="link"><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Autores</a></li>
											<img class="grilla" src="/proylecturademo/web/images/grillaautor.png">

										</ul>

								</div>		
						
								<div class="seccion2">
													
					
								</div>							
								<div class="seccion3">
			
								</div>

						<div class="section group">
						<div class="grid_1_of_4 images_1_of_4">

						</div>
					</div>
				</div>
					<!---End-content---->
					<div class="clear"> </div>
				</div>
					<div class="footer"> 
						<div class="wrap"> 
						<div class="footer-left">
								&copy; 2015 ProyectoLectura.com 
						</div>
						<div class="footer-right">
							<p></p>
						</div>
						<div class=="clear"> </div>
					</div>
					<div class="clear"> </div>
		<!---end-wrap---->
		</div>
	</body>
</html>

