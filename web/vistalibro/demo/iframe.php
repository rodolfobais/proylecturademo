	<?php 

	session_start();

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("librofinal",$conn);

	$id = isset($_GET['id']) ? $_GET['id'] : "";
	
	$query = "select * from libro where id = '$id'";
	$resultado = mysql_query($query, $conn);
	$tabla = mysql_fetch_assoc($resultado);
	
	$nombre = $tabla['nombre'];

	$idautor= $tabla['id_autor'];
	$query2 = "select * from autor where id = '".$idautor."';";
	$resultado2 = mysql_query($query2, $conn);
	$tabla2 = mysql_fetch_assoc($resultado2);
	
	$autor = $tabla2['nombre'];

	$idgenero = $tabla['id_genero'];
	$query3 = "select * from genero where id = '".$idgenero."';";
	$resultado3 = mysql_query($query3, $conn);
	$tabla3 = mysql_fetch_assoc($resultado3);
	
	$genero = $tabla3['nombre'];

	//Xecho "<pre>"; print_r($genero); echo "</pre>";die;
	?>

<!DOCTYPE html>

<html>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="../source/iframe-style.css" />

</head>
<body>

	<p id="title">
					Titulo: <?php echo $nombre; ?> <br/>
					Genero: <?php echo $genero; ?> <br/>
					Autor: <?php echo $autor; ?> <br/>
	</p>

	<p >
		<!--<a href="javascript:parent.jQuery.fancybox.close();">Close iframe parent</a>

		|

		<a href="javascript:parent.jQuery.fancybox.open({href : '1_b.jpg', title : 'My title'});">Change content</a>
	-->

	<img id="image" src= <?php echo $id. "_b.jpg" ?> /><br/><br/>
	
	<a href="#">+1</a>	Votos: 0<br/><br/>

	<a href="#">Compartir</a> | <a href="#">Denunciar</a> | <a href="#">Descargar</a>

	</p>

	

	<p id="description">
		Seccion Review <br/><br/>

				

		Comentarios:<br/>
		<textarea rows="10" cols="40"></textarea>
	</p>
</body>
</html>
  <?php mysql_close($conn); ?>