<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//include_once 'classes/dataBase.class.php';
$db = new dataBase('');
$sql = "SELECT * FROM libro"; 
//$result = $db -> QueryFetchArrayASSOC($sql);
//echo "<pre>"; print_r($result);echo "</pre>";

$arrSliderHeader = array();
$pos = 0;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas recomendado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;

$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas descargado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;


$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Ultimos publicados";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "../web/images/g3.jpg";
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
		<link href="../web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<meta name="keywords" content="legend iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
		<link href='../web/css/font-Ropa+Sans.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="web/css/responsiveslides.css">
		<script src="../web/js/jquery.min.js"></script>
		<script src="../web/js/responsiveslides.min.js"></script>
		
		
		<link href="../ckeditor/sample.css" rel="stylesheet" type="text/css"/>
		<script src="../ckeditor/ckeditor.js"></script>
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
					      	<img src="../web/images/logoPL.png" title="logo" height = 50 />
				      	</a>
				      </div>
				      <!---end-logo---->
				      <!---start-search---->
				      <div class="top-search-bar">
					      <div class="header-top-nav">
						      <ul>
							      <li><a href="#" ><span  class="botones">Login</span></a></li>
							      <li><a href="#" ><span  class="botones">Registrese</span></a></li>
							      <li><a href="#" ><span  class="botones">Mensajes</span></a></li>
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
							<li class="active"><a href="index.html">Home</a></li>
							<li><a href="about.html">About us</a></li>
							<li><a href="clients.html">Clients</a></li>
							<li><a href="services.html">Services</a></li>
							<li><a href="contact.html">Contact</a></li>
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
					<div class="image-slider" style="height: 320px;">
					    <ul class="rslides" id="slider1">
					      	<?php echo $slider; ?>
					    </ul>
					    
					    
						 <!-- Slideshow 2 -->
					</div>
					<!--End-image-slider---->
					<!---start-content---->
					<div class="content">
						<?php
							// Include CKEditor class.
							include_once "/var/www/librosTemplate/ckeditor/ckeditor.php";
							// The initial value to be displayed in the editor.
							$initialValue = '<p>This is some <strong>sample text</strong>.</p>';
							// Create class instance.
							$CKEditor = new CKEditor();
							// Path to CKEditor directory, ideally instead of relative dir, use an absolute path:
							//   $CKEditor->basePath = '/ckeditor/'
							// If not set, CKEditor will try to detect the correct path.
							$CKEditor->basePath = '../../';
							// Create textarea element and attach CKEditor to it.
							$CKEditor->editor("editor1", $initialValue);
						?>
						<br/><br/>
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

