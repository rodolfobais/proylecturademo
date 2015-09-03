
<!DOCTYPE HTML>
<html>
	<head>
		<title>legend Website Template | clients :: W3layouts</title>
            <script src="/proylecturademo/web/js/jquery.min.js"></script>
            <script type="text/javascript" src="/proylecturademo/web/js/ajax.js"></script>
            <script type="text/javascript" src="/proylecturademo/web/js/footer.js"></script>
            <script type="text/javascript" src="/proylecturademo/web/js/crearlista.js"></script>
            <script type="text/javascript" src="/proylecturademo/web/js/buscarUsuarios.js"></script>
            <!-- Add mousewheel plugin (this is optional) -->
            <script type="text/javascript" src="/proylecturademo/web/vistamp3/lib/jquery.mousewheel-3.0.6.pack.js"></script>
            <!-- Add fancyBox main JS and CSS files -->
            <script type="text/javascript" src="/proylecturademo/web/vistamp3/source/jquery.fancybox.js?v=2.1.5"></script>
            <link rel="stylesheet" type="text/css" href="/proylecturademo/web/vistamp3/source/jquery.fancybox.css?v=2.1.5" media="screen" />
            <link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
            <meta name="keywords" content="legend iphone web template, Andriod web template, Smartphone web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
            <link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'/>
            <script type="text/javascript" src="/proylecturademo/web/js/fancylibro.js"></script>
	</head>
	<body>
        <div class="header">
            <div class="wrap">
				<div class="logo">
					<a href="/proylecturademo/"><img src="/proylecturademo/web/images/logoPL.png" title="logo" /></a>
				</div>
				<div class="top-search-bar">
                    <div class="header-top-nav">
				        <ul>
				        <li><a href="#" onclick = "abrirfancy('mensajes', 'mensajes-fancy')"><img src="/proylecturademo/web/images/marker1.png" title="Mensajes" />Mensajes</a></li>
				        <li><a href="login">Salir</a></li>
                        </ul>
                    </div>
				</div>
				<div class="clear"> </div>
            </div>
        </div>
            <div class="clear"> </div>
				<?php include("menu.php"); ?>
			<div class="wrap">
                <div class="grid_1_of_4 images_1_of_4">
                    <div class="button"><span ><a class="fancybox-manual-mp3" href="javascript:;" name="1" style="background: #AB7A20;" href="#">Subir un Audio</a></span></div>
                    </div>
                    
                    </br></br></br></br></br></br>
        <div class="clients">
            <h5>Generar Audiolibros o Listas de Audiolibros</h5>
				<div class="section group">
				    <div class="grid_1_of_4 images_1_of_4">
				        <div id="columna_izq">
                            <div class="cont">
                                <h5><label style="margin-left:10px;">b&uacute;squeda de audio</label></h5>
                                <input type="text" id="audiolibro" />
                            </div>
                            <div onClick="buscar();" id="btn" class="button">
                                <span><a href="#">Buscar</a></span>
                            </div> <!--Considerar si se cambia separando con <a>-->
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
				        <div id="columna_der">
            	           <h5>Ingrese los datos de la Compilacion</h5>
                            <div class="cont">
                                <a>Nombre de Compilacion:</a>
                                <br />
                                <input type="text" id="nombrelista" id="libro" />                
                            </div>
                            <div class="cont">
                                <label style="margin-left:10px;">G&eacute;nero: </label>
                                <br />
                                <select id="generolista" id="libro" >
                                    <?php 
                                        include('php/servicio.php');
                                        $sql = "SELECT * FROM genero";
                                        $result= query($sql,0);
                                        while($row = mysql_fetch_array($result))
                                            {echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
                                            }
                                     ?>
                                </select>
                            </div>
                            <div class="cont">
                                <a>Privacidad:</a>
                                <br />
                                <select >
                                    <option value="0">Privada (s&oacute;lo yo)</option>
                                    <option value="1">P&uacute;blica</option>
                                    <option value="2">Compartida</option>
                                </select>
                                <br />
                                    <div id="DivCompartir" style="display:none;">
                                    <label style="margin-left:10px;">Compartir con: </label>
                                    <br />
                                    <select id="compartidaconamigos" name="compartidaconamigos" multiple height="40">
                                         <?php 
                                            @session_start();
                                            $sql = "SELECT * FROM amistad where (id_usuario=".$_SESSION['login']." or                                                       id_usuarioamigo=".$_SESSION['login'].") and estado =1";
                                            $result= query($sql,0);
                                            while($row = mysql_fetch_array($result))
                                                {
                                                    if($row['id_usuario']==$_SESSION['login']){
                                                        $sql = "SELECT * FROM usuario where id=".$row['id_usuarioamigo'];
                                                        $result2= query($sql,0);
                                                        while($row2 = mysql_fetch_array($result2)){
                                                            $nombre = $row2['nombre'];
                                                        }
                                                        echo '<option                                                                                                                   value="'.$row['id_usuarioamigo'].'">'.$nombre.'</option>';
                                                    }else{
                                                        $sql = "SELECT * FROM usuario where id=".$row['id_usuario'];
                                                        $result2= query($sql,0);
                                                        while($row2 = mysql_fetch_array($result2)){
                                                            $nombre = $row2['nombre'];
                                                        }
                                                        echo '<option value="'.$row['id_usuario'].'">'.$nombre.'</option>';
                                                    }
                                                }
                                         ?>
                                    </select>
                                    <span onclick="verdatosmultipleselect();">tomar datos multiple select</span>
                                    </div>
                                <div onClick="grabarLista();" id="btn"  class="button"><span><a href="#">Generar</a></span></div>
                            </div>
                        </div>
						     
				    </div>
						
						<div class="grid_1_of_4 images_1_of_4">
							<div class="section group">
							<h4>Mis Compilado Audiolibros</h4>
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
				</div>
					<?php include 'footerlogueado.php';?>
	</body>
</html>
