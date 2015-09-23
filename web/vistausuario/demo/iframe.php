	<?php 

	session_start();

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("librofinal",$conn);

	$id = isset($_GET['id']) ? $_GET['id'] : "";
	
	$query = "select * from usuario where id = '$id'";
	$resultado = mysql_query($query, $conn);
	$tabla = mysql_fetch_assoc($resultado);
	?>

<!DOCTYPE html>

<html>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="../source/iframe-style.css" />

</head>
<body>

	<p id="title">
					<span class="titulos">Usuario:</span> <span><?php echo $tabla['nombre']; ?> </span><br/>
					<span class="titulos">Email:</span> <span style="text-decoration: underline; color:blue; cursor: pointer;"> <?php echo $tabla['mail']; ?></span> <br/>
	</p>

	<p >
		<!--<a href="javascript:parent.jQuery.fancybox.close();">Close iframe parent</a>
		|
		<a href="javascript:parent.jQuery.fancybox.open({href : '1_b.jpg', title : 'My title'});">Change content</a>
	-->

	<img id="image" src= "10_b.jpg" /><br/><br/>
	
	<a class="btn" href="#" />Enviar Solicitud </a> | <a class="btn" href="#" />Denunciar</a><br/><br/>	

	Amigos: 20<br/><br/>

	<a href="#">Publicaciones</a> :3 <br/><br/> 
	</p>
	<br/><br/> <br/><br/> 
	<div id="description">
		<span class="titulos">Publicaciones:</span>
			<ul >
			  <li> Las mil y una noches </li>
			  <li> Redes CCNA </li>
			  <li> Conceptos de PHP </li>
			</ul>

		
	</div>
</body>
</html>
  <?php mysql_close($conn); ?>