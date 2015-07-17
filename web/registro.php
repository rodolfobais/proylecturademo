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


/*
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
	    			<img src="'.$value['contenido_0']['img'].'"><br/><p>'.$value['contenido_0']['txt'].'</p>		
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
//echo "<pre>"; print_r($misTrabajosArr);echo "</pre>";*/
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

		  <!--input validation-->
		
		<?php
		$nombreErr = $mailErr = $passErr = $pass2Err = "";
		$nombre = $mail = $pass = $pass2 = "";
		$error = 0;
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		   if (empty($_POST["nombre"])) {
		     $nombreErr = "Name is required";
		   	 $error = 1;	
		   } else {
		     $nombre = test_input($_POST["nombre"]);
		   }
		   
		   if (empty($_POST["mail"])) {
		     $mailErr = "Email is required";
		   	 $error = 1;
		   } else {
		          $mail = test_input($_POST["mail"]);
			     // check if e-mail address is well-formed
			     if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			       $mailErr = "Invalid email format"; }
		   }
		     
		 if (empty($_POST["pass"])) {
		     $passErr = "Password is required";
		   	 $error = 1;
		   } else {
		     $pass = test_input($_POST["pass"]);
		   }

		   if (empty($_POST["pass2"])) {
		     $pass2Err = "Password verification is required";
		   	 $error = 1;
		   } else {
		     $pass2 = test_input($_POST["pass2"]);
		   	if($pass != $pass2)
		   		$pass2Err = "Passwords do not match";	
		   }
		
		   if($error == 0)
		   	 header('location: login.php' );	   		
		}

		function test_input($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}


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
							      <li><a href="login"><img src="/proylecturademo/web/images/marker1.png" title="livehelp" />Login</a></li>
							      <li><a href="registro"><img src="/proylecturademo/web/images/marker1.png" title="Blog" />Registrese</a></li>
							      
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
							<!--
							<li class="active"><a href="/proylecturademo/web/index.php">Inicio</a></li>
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
							
						<!-- registracion o login -->


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
							        <input type="password" id="pass1" class="login" name="pass2" value="" size="25"/>
							        <span class="error"><?php echo $pass2Err;?></span> <br> <br> 
							    </div>
							   
							    <div>
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

