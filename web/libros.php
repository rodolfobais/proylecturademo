<?php
//session_start();
//echo "<pre>"; print_r($_SESSION); echo "</pre>";die;

include_once('versession.php');

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Proyecto lectura</title>

		<link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='/proylecturademo/web/css/font-Ropa+Sans.css' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/proylecturademo/web/css/responsiveslides.css">
		<link rel="stylesheet" href="/proylecturademo/web/css/login-style.css">
		<link rel="stylesheet" type="text/css" href="/proylecturademo/web/vistalibroupload/source/jquery.fancybox.css?v=2.1.5" media="screen" />
        <link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
      	<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'/>
        
      	<meta name="keywords" content="legend iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

        <script src="/proylecturademo/web/js/jquery.min.js"></script>
		<script src="/proylecturademo/web/js/responsiveslides.min.js"></script>
		<script src="/proylecturademo/web/js/crearlibro.js"></script>
        

            <!-- Add fancyBox main JS and CSS files -->
            <script type="text/javascript" src="/proylecturademo/web/vistalibroupload/source/jquery.fancybox.js?v=2.1.5"></script>              
            <script type="text/javascript" src="/proylecturademo/web/js/fancylibro.js"></script>

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
				<div class="header-nav">

					<div class="clear"> </div>
				</div>
				<!---start-search---->
			</div>
			<!---end-header---->
			<div class="wrap">  
                <div class="grid_1_of_4 images_1_of_4">
                    <div class="button"><span ><a class="fancybox-manual-libro" href="javascript:;" name="1" style="background: #AB7A20;" href="#">Subir un Libro</a></span></div>                   
                </div>
                    
                    </br></br></br></br></br></br>
        <div class="clients">
            	<h5>Subir y Buscar libros</h5>
				<div class="section group">
				    <div class="grid_1_of_4 images_1_of_4">
				        <div id="columna_izq">
                            <div class="cont">
                                <h5><label style="margin-left:10px;">b&uacute;squeda de Libros</label></h5>
                                <input type="text" id="audiolibro" />
                            </div>

                        <div class="cont">
					        <label style="margin-left:10px;">Filtrar por:</label>
					        <br><br>
					        <label style="margin-left:10px;">Genero: </label>
					        	
					        <select id="genero" name="genero">
					        <?php
					            include('php/servicio.php');
								$sql = 'SELECT * FROM genero';
					            $generos=query($sql,0);
					            while ($genero = mysql_fetch_array($generos)) {
					                echo '<option value="'.$genero['id'].'">'.$genero['nombre'].'</option>';		
					            }	
					        ?>	
					        </select>
					        </div>
					        <br>
					        <div class="cont">
					        <label style="margin-left:10px;">Autor: </label>
					        	
					        <select id="autor" name="autor">
					        <?php 
					            $sql = 'SELECT * FROM autor';
					            $autores=query($sql,0);
					            while ($autor = mysql_fetch_array($autores)) {
					                echo '<option value="'.$autor['id'].'">'.$autor['nombre'].'</option>';		
					            }	
					        ?>	
					        </select>
					    </div>   
					    	<br>
                            <div onClick="buscar();" id="btn" class="button">
                                <span><a href="#">Buscar</a></span>
                            </div> <!--Considerar si se cambia separando con <a>-->
                                <br>
                                <h5>Resultados encontrados:</h5>
                            <div id="audiolibrosencontrados">	
                                </br></br>
                            </div>
                        </div>    
				    </div>
				    <div class="grid_1_of_4 images_1_of_4">
                        <div id="columna_centro">
                            <h5>Libros agregados en la lista</h5>
                            <div id="audiolibrossumados">
                                No hay libros agregados
                                </br></br>
                            </div>
                        </div>    
				    </div>

						
						<div class="grid_1_of_4 images_1_of_4">
							<div class="section group">
							<h4>Mis Libros subidos</h4>
							<ul>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Trilogia el se&ntilde;or de los anillos</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Miedo a Volar</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Como Comer una naranja(avanzado)</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Para antes de dormir</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Cuentos Cortos</a></li>
								<li><a href="#"><img src="/proylecturademo/web/images/marker2.jpg" title="pointer "/>Entrevista al Pity Alvarez</a></li>
								
							</ul>
						</div>
						</div>
					</div>
					
				</div>
				 </div>
					<!---End-content---->
					<div class="clear"> </div>
					<div class="footer"> 
						<div class="wrap"> 
						<div class="footer-left">
						<p>&copy; 2015 ProyectoLectura.com</p> 
						</div>
						<div class="footer-right">
							
						</div>
						<div class=="clear"> </div>
					</div>
					<div class="clear"> </div>
		<!---end-wrap---->
		</div>
	</body>
</html>

