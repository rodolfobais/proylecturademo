<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
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
		<link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="legend iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
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

		 <?php

		 //Input validation

		$mailErr = $passErr = "";
		$mail = $pass = "";
		$error = 0;

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		   		   
		   if (empty($_POST["mail"])) {
		     $mailErr = "Email is required";
		   	 $error = 1;
		   } else {
		          $mail = test_input($_POST["mail"]);
			     // check if e-mail address is well-formed
			     if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			       $mailErr = "Invalid email format"; }
		   }
		     
		 if (empty($_POST["password"])) {
		     $passErr = "Password is required";
		     $error = 1;
		   } else {
		     $pass = test_input($_POST["password"]);
		   }

		    if($error == 0)
		   	 header('location: login' );
		}

		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}

		// Validacion de usuario

			$conn = mysql_connect("localhost","root","");
			mysql_select_db("librofinal",$conn);
	
			//include_once 'classes/dataBase.class.php';
			//$conn = new dataBase('');

		// usuario y contraseña enviados por form
		$usuario = isset($_POST["mail"]) ? $_POST["mail"] : "";
		$password = isset($_POST["password"]) ? $_POST["password"] : "";
	
		$sql="SELECT nombre, id, admin FROM usuario WHERE mail ='$usuario' and password='$password'";
		$result=mysql_query($sql,$conn);
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);
		
		
		// si el usuario y password son validos devuelve 1 en count
		if($count==1)
		
{
		session_start();
			$_SESSION['login_user']=$usuario;
			$_SESSION["idUsuarioLogueado"] = $row[1];
        	$_SESSION["rolUsuario"] = $row[2];
        	
        //$cookie_user = $_POST['mail'];
        $remember = $_POST['remember'];
		
		if($remember == 1) 
		{
		setcookie($cookie_user, $_POST['mail'], time() + (86400 * 30), "/"); // 86400 = 1 day
		header('location: home');
		$message ="Login exitoso!";
		}
		else
		{
		header('location: login');
		$error="Usuario o Password invalido";
		}
		
}
	mysql_close($conn);
?>


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
							      <li><a href="index.php/login"><span class="botones">Login</span></a></li>
							      <li><a href="index.php/registro"><span class="botones">Registrarse</span></li>
							      
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
							<li><a href=""></a></li>
							<!--<li class="active"><a href="/proylecturademo/web/index.php">Inicio</a></li>
							<li><a href="/proylecturademo/web/about.php">Centro de Redaccion</a></li>
							<li><a href="/proylecturademo/web/clients.php">Audiolibros</a></li>
							<li><a href="/proylecturademo/web/social.php">Social</a></li>
							<li><a href="/proylecturademo/web/contact.php">Administrador</a></li>-->
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
		
					<!--End-image-slider---->
					<!---start-content---->
					<div class="content">
						<div class="section group">
						<div class="grid_1_of_4 images_1_of_4">
							
						<!-- registracion o login -->

						<div id="contenedorLogin">
							<h1 class="titulo">Login</h1>
							<div id="campos">
							<form id="user_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						   	<br>
						   	<span class="label"> E-mail: </span><br><input type="text"  id="mail" name="mail" class="login" size="25" value=""/>
						   	<span class="error"><?php echo $mailErr;?></span> <br><br>
						   	<span class="label"> Password: </span><br><input type="password" value=""  id="password" name="password" class="login" size="25"/>
						   	<span class="error"><?php echo $passErr;?></span> <br><br>

						   	<input type="checkbox" name="remember" value="1">Recordarme<br><br>

						      <input id="btn" class="btn" type="submit" value="Login"/>
						      <div id="cargando"></div>

						      	<div class="links">
								<?php
							    $error = isset($_GET["error"]) ? $_GET["error"] : 0;

							    if ($error != 0){
							        echo "<p style='color: red;'>E-mail o password incorrecto, por favor, verifique.</p>";
							    }

							    ?>
								</div>  

						   </div> 	
						   </form>
							<div class="links"><br>
								<a href="#"> Resetear password</a>
							</div>           
						</div>
						
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

