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
		<link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		
		<link href='/proylecturademo/web/css/font-Ropa+Sans.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/proylecturademo/web/css/responsiveslides.css">
		<link rel="stylesheet" href="/proylecturademo/web/css/login-style.css">
        <script type="text/javascript" src="/proylecturademo/web/js/ajax.js"></script>
        <script type="text/javascript" src="/proylecturademo/web/js/buscarUsuarios.js"></script>
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
								<h4 style="font-size:15px;float:left;margin-left:20px;margin-top:20px;padding:0px;margin-bottom:0px;">¿A qu&eacute; usuario buscas?</h4>
                                <input type="text" id="usuariobuscado" placeholder="Ingrese el nombre de usuario" style="float:left;width:200px;height:20px;clear:both;margin-top:20px;margin-left:20px;" />
                                <span id="btn" style="float:left;clear:both;margin-left:20px;margin-top:20px;" onclick="buscarUnUsuario();">Buscar</span>
                                <div id="resultadosDeUsuario" style="float:left;clear:both;margin-left:20px;margin-top:20px;">
</div>
                                <div id="resultadosDeAgregarUsuario" style="float:left;clear:both;margin-left:20px;margin-top:20px;color:#666;">
                                </div>
								</div>		
						
								<div class="seccion2">
									<h4 style="font-size:15px;float:left;margin-left:20px;margin-top:20px;padding:0px;margin-bottom:0px;">
Mis amistades
</h4>
<div style="float:left;margin-left:20px;margin-top:20px;clear:both;">
<?php 
include_once('php/Usuarios.php');
$Usuario = new Usuarios();
$amistades = $Usuario->traerAmistades($_SESSION['login']);
echo $amistades;
?>
</div>
								</div>
						
								<div class="seccion3">
									<h4 style="font-size:15px;float:left;margin-left:20px;margin-top:20px;padding:0px;margin-bottom:0px;clear:both;">
Mis solicitudes pendientes
</h4>

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