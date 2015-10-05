<?php
//session_start();
//echo "<pre>"; print_r($_SESSION); echo "</pre>";die;

include_once('versession.php');
//include_once 'classes/dataBase.class.php';

$db = new dataBase('');
$sql ="SELECT c.descripcion, g.nombre as nombreGenero, u.nombre as nombreUsuario, c.fecha
		FROM clasificados as c 
	   INNER JOIN usuario as u ON c.id_autor = u.id
	   INNER JOIN genero as g ON c.id_genero = g.id";
$arrclasificado = $db -> QueryFetchArrayASSOC($sql);

//echo "<pre>"; print_r($arrlibro[0]); echo "</pre>";//die;

$tablaClasificados= "<table border = 1>

<tr>
		<td>Descripcion</td>
		<td>Usuario</td>
		<td>Genero</td>
		<td>Fecha</td>

</tr>";
foreach ($arrclasificado as $value) {
	$tablaClasificados .= "
	<tr>
		<td>".$value['descripcion']."</td>
		<td>".$value['nombreUsuario']."</td>
		<td>".$value['nombreGenero']."</td>
		<td>".$value['fecha']."</td>
		
	</tr>";
}
$tablaClasificados .= "</table>";
//echo $value['nombreAutor'];
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
					<!---start-content---->
					<div class="content">
						<h1>Mi biblioteca</h1>
						<div class="singlelink">
							<div class="section group example">
							<div class="col_1_of_1 span_1_of_1">
							 <?php echo $$tablaClasificados;?>

						    </div>
					    </div>
						</div>
	<div class="clear"> </div>
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

