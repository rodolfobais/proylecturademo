<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>legend Website Template | About :: W3layouts</title>
		<link href="/proylecturademo/smartphone/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<script src="/proylecturademo/smartphone/js/mobile.js"></script>	
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
		    		<a href="index.php/login"><img src="/proylecturademo/web/images/logoPL.png" alt=""/></a>
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
		<div class="wrap">
			<!---start-content---->
			<div class="content">						
				<div class="image group">
					<div id="contenedorLogin">
						<h1 class="titulo">Login</h1>
						<div id="campos">
							<form id="user_form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
						   		<br>
						   		<span class="label"> E-mail: </span><br><input type="text" value="" id="mail" name="mail" class="login" size="25"/>
						   		<span class="error"><?php echo $mailErr;?></span> <br><br>
						   		<span class="label"> Password: </span><br><input type="password" value=""  id="password" name="password" class="login" size="25"/>
						   		<span class="error"><?php echo $passErr;?></span> <br><br>
						      	<!--  <input id="btn" class="btn" type="submit" value="Login"/>-->
						      	<div class="btn"><span><a href="index.php/home">Ingresar</a></span></div>
						      	<div id="cargando"></div>

						      	<div class="links">
									<?php
								    $error = isset($_GET["error"]) ? $_GET["error"] : 0;
	
								    if ($error != 0){
								        echo "<p style='color: red;'>E-mail o password incorrecto, por favor, verifique.</p>";
								    }
	
								    ?>
								</div>  
							</form>
					   </div> 	
						<div class="links"><br>
							<a href="#"> Resetear password</a>
						</div>           
					</div>
					
				</div>
				<!---End-content---->
				<div class="clear"> </div>
			</div>
		</div>
			<?php include 'footer.php';?>
	</body>
</html>

