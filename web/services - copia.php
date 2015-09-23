<?php
session_start();

include_once('versession.php');

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
		<link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		
		<link href='/proylecturademo/web/css/font-Ropa+Sans.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/proylecturademo/web/css/responsiveslides.css">
		<link rel="stylesheet" href="/proylecturademo/web/css/login-style.css">
		<script src="/proylecturademo/web/js/jquery.min.js"></script>
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
				      	<div>Bienvenido - <?php  if (isset($_SESSION['login_user'])){ echo $_SESSION['login_user'];}else if (isset($_COOKIE[$cookie_user])){ echo $_COOKIE[$cookie_user];}?></div>
					      <div class="header-top-nav">
						      <ul>
							      <li><a href="#" onclick = "abrirfancy('mensajes', 'mensajes-fancy')"><img src="/proylecturademo/web/images/marker1.png" title="Mensajes" />Mensajes</a></li>
							      <li><a href="login">Logout</a></li>
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

							<h4 class="titulo"> Social</h4>
								<div class="seccion1">
									<h4 class="innertitle">&iquest;A qu&eacute; usuario buscas?</h4>

									<input type="text" id="usuariobuscado" class="usuariobuscado" placeholder="Ingrese el nombre de usuario" />

									<span id="btn" class="btnbuscar" onclick="buscarUnUsuario();">Buscar</span>

									<div id="resultadosDeUsuario" style="float:left;clear:both;margin-left:20px;margin-top:20px;"></div>
									<div id="resultadosDeAgregarUsuario" style="float:left;clear:both;margin-left:20px;margin-top:20px;color:#666;"></div>
									
								</div>		
						
								<div class="seccion2">
									<h4 class="innertitle"> Mis amistades</h4>

										<div class="amigos">
											<ul style="list-style-type:circle">
											  <li><a class="link" href="#">Martin</a><img src="/proylecturademo/web/images/config.ico" style="width:15px; height:15px; margin-left:3px; cursor:pointer;"/> </li>
											  <li><a class="link" href="#">Facundo</a><img src="/proylecturademo/web/images/config.ico" style="width:15px; height:15px; margin-left:3px; cursor:pointer;"/> </li>
											  <li><a class="link" href="#">Laura</a><img src="/proylecturademo/web/images/config.ico" style="width:15px; height:15px; margin-left:3px; cursor:pointer;"/> </li>
											</ul>
										</div>
								</div>
						
								<div class="seccion3">
									<h4 class="innertitle">	Mis solicitudes pendientes</h4>
										<div class="amigos"> Invitacion de Carlos pendiente de aceptacion/rechazo.	</div>
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

