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
		<link href="/proylecturademo/smartphone/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/proylecturademo/smartphone/css/responsiveslides.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="/proylecturademo/smartphone/js/responsiveslides.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		
		<script src="/proylecturademo/smartphone/js/mobile.js"></script>		 
	    <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
		  
		<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
	</head>
	<body>
		<!---start-wrap---->
		<div class="wrap">
			<!---start-sidebar---->
			<div id="w3-universal-nav">
		    	<ul id="header">
		    		<a href=""><img src="/proylecturademo/web/images/logoPL.png" alt=""/></a>
		    	</ul>
    		</div>
		</div>
<!-- The menu -->
	<nav class="clearfix">
		<ul>
			<li><a href="index.php/login">Login</a></li>
			<li><a href="index.php/registro">Registrese</a></li>
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
	<div class="clear"> </div>
	<div class="left-sidebar"> </div>
	<!--start-image-slider---->
	<div class="wrap">
		<div id="columna_centro">
  			<div class="cont">
	         	Mensajes
         	</div>
   	  		<div class="cont">
   	  			01/07/15 20:01 
         		<a class="link" href="#">Martin </a> 
         		Buenas, como vas con el proyecto ese?
         		<img alt="Responder" src="/proylecturademo/web/images/flechaverde.png" width="20">
         		<img alt="Eliminar" src="/proylecturademo/web/images/cruzroja.png" width="20">                
         	</div>
	        <div class="cont">
   	  			15/06/15 23:01 
         		<a class="link" href="#">Diego </a> 
         		Vas mañana a la facu?
         		<img alt="Responder" src="/proylecturademo/web/images/flechaverde.png" width="20">
         		<img alt="Eliminar" src="/proylecturademo/web/images/cruzroja.png" width="20">                
         	</div>		
		</div>
			<!--End-image-slider---->
			<!---start-content---->
			<div class="content">
						
			</div>
			<!---End-content---->
			<div class="clear"> </div>
		</div>
		<?php include 'footer.php';?>
	</body>
</html>

