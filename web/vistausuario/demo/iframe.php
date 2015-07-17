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
					Usuario: <?php echo $tabla['nombre']; ?> <br/>
					E-mail: <?php echo $tabla['mail']; ?> <br/>
	</p>

	<p >
		<!--<a href="javascript:parent.jQuery.fancybox.close();">Close iframe parent</a>
		|
		<a href="javascript:parent.jQuery.fancybox.open({href : '1_b.jpg', title : 'My title'});">Change content</a>
	-->

	<img id="image" src= "10_b.jpg" /><br/><br/>
	
	<a href="#">Enviar solicitud</a> | <a href="#">Denunciar</a><br/><br/>	

	Amigos: 0<br/><br/>

	<a href="#">Publicaciones</a> :0 <br/><br/> 
	</p>

	<p id="description">
		Intereses:<br/><br/>
		Novelas, Microinformatica, Ciencia ficcion.

		
	</p>
</body>
</html>
  <?php mysql_close($conn); ?>