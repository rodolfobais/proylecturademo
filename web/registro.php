<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//include_once 'classes/dataBase.class.php';
?>

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
	// **********VALIDACION DE INPUTS DEL FORM*********************
		
		$nombreErr = $mailErr = $passErr = $pass2Err = $existeErr = "";
		$nombre = $mail = $pass = $pass2 = "";

		$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
		$mail = isset($_POST["mail"]) ? $_POST["mail"] : "";
		$pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
		$pass2 = isset($_POST["pass2"]) ? $_POST["pass2"] : "";

		$error = 0;
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") 
		{
		   if ($nombre == "") {
		     $nombreErr = "Debe completar el nombre";
		   	 $error = 1;	
		   } 
		   //else {
		   //  $nombre = test_input($nombre);
		   //}
		   
		   if ($mail == "") {
		     $mailErr = "Debe completar el mail";
		   	 $error = 1;
		   } else {
		        //  $mail = test_input($mail);
			     // check if e-mail address is well-formed
			     if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			       $mailErr = "Ingrese un e-mail valido"; 
			       $error = 1;
			   		}
		   }
		     
		 if ($pass == "") {
		     $passErr = "Debe completar el password";
		   	 $error = 1;
		   } 
		   //else {
		   //  $pass = test_input($pass);
		   //}

		   if ($pass2== "") {
		     $pass2Err = "Confirme su password";
		   	 $error = 1;
		   } else {
		     //$pass2 = test_input($pass2);
		   	if($pass != $pass2){
		   		$pass2Err = "Los password no coinciden";	
		   		$error = 1;
		   		}
		   }
		
		 //  if($error == 0)
		   //	 header('location: login' );	   		
		

		// *************** REGISTRACION DE USUARIO*********************

				session_start();
				$conn = mysql_connect("localhost","root","");
				mysql_select_db("librofinal",$conn);

				$query = "select 1 from usuario;";
				$resultado = mysql_query($query, $conn);
				$filas = mysql_num_rows($resultado);

				$query = "select nombre from usuario where nombre = '".$nombre."';";
				$resultado = mysql_query($query, $conn);

				$usuarios_existentes = mysql_num_rows($resultado);

				if($usuarios_existentes  > 0)
				{
					$existeErr = "El usuario ya existe, por favor pruebe nuevamente";
				    mysql_close($conn);
				}
				else
				{
					if($error == 0)
		   			{
					$_SESSION["usuarioLogueado"] = $nombre;
				    $_SESSION["rolUsuario"] = "nombre";
					$id_usuario = $filas + 1;
				    $_SESSION["idUsuarioLogueado"] = $id_usuario;
					
					$insert= "insert into usuario(id,nombre, mail, password) values	('".$id_usuario."','".$nombre."','".$mail."','".$pass."');";
					$resultado = mysql_query($insert, $conn);
				    mysql_close($conn);	
					
					header('location: login');
					}	
				}
		}

		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}

			
?>
</head>

<!--********************COMIENZO DE BODY************************-->
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
							<li><a href="/proylecturademo/web/services.php">Social</a></li>
							<li><a href="/proylecturademo/web/contact.php">Administrador</a></li>
							-->
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
							
						<!--**************** FORM DE REGISTRACION ****************-->

						<div id="contenedorLogin">
								<legend><h1 class="titulo">Registro</h1></legend><br> 

							<form id="newuser_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="web/login.php" method="post">
							    <div class="contenedor_reg">
							        <span class:"label">Nombre:</span> <br> 
							        <input type="text" id="nombre" class="login" name="nombre" value="" size="25"/>
							   		<span class="error"><?php echo $nombreErr;?></span> <br><br> 
							    </div>
							    							    
							    <div class="contenedor_reg">
							        <span class:"label">Email:</span><br> 
							        <input type="text" id="mail" class="login" name="mail" value="" size="25"/> 
							    	<span class="error"><?php echo $mailErr;?></span> <br> <br>
							    </div>
							    <div class="contenedor_reg">
							        <span class:"label">Contrase&ntilde;a:</span><br> 
							        <input type="password" id="pass" class="login" name="pass" value="" size="25"/> 
							   		<span class="error"><?php echo $passErr;?></span> <br><br> 
							    </div>
							    <div class="contenedor_reg">
							        <span class:"label">Confirmar Contrase&ntilde;a:</span><br> 
							        <input type="password" id="pass2" class="login" name="pass2" value="" size="25"/>
							        <span class="error"><?php echo $pass2Err;?></span> <br> <br> 
							    </div>
							   
							    <div>
							    	<span class="error"><?php echo $existeErr;?></span> <br> <br> 
							    	<span id="validacion" style="float: left;text-align: center; color: white; margin-top: 12px;"></span>
							        <br />
							        <input id="btn" class="btn" type="submit" value="Registrarse"/>					        
							    </div>
							 
							</form>
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

