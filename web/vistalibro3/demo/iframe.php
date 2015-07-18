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
	?>

<!DOCTYPE html>

<html>
<head>
	<script type="text/javascript" src="fancylibro.js"></script>
        
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    
	<link rel="stylesheet" type="text/css" href="../source/iframe-style.css" />

</head>
<body>

	<p id="title">
        <span class="titulos">Titulo:</span> <span class="nombre">Limites de la Escuela </span> </br>
		<span class="titulos">Genero:</span> <span class="nombre">Educativo </span></br>
		<span class="titulos"> Autor: <span> <a class="fancybox-manual-z" href="javascript:;" name="1">Emilio Blanco </a>
	</p>

	<p >
		<!--<a href="javascript:parent.jQuery.fancybox.close();">Close iframe parent</a>

		|

		<a href="javascript:parent.jQuery.fancybox.open({href : '1_b.jpg', title : 'My title'});">Change content</a>
	-->

	<img id="image" src= "a11.jpg"  /><br/><br/>
	
	<a href="#">+1</a>	Votos: 6<br/><br/>

	<input type="button" class="btn" value="Compartir" /> | <input type="button" class="btn" value="Denunciar" /> | <input type="button" class="btn" value="Descargar" />

	</p>

	<p id="description">
		<span class="comment">Sinopsis: </span><br/><br/>

		La continua necesidad de entender cuales son los alcances de los sectores de estudios en sus distintos grados, ademas se intenta profundizar en la importancia de la comunicacion y hasta donde un docente o institucion de involucrarse <br/><br/>

				

		<span class="comment">Comentarios:</span><br/>
		<img class="imagen" src="/proylecturademo/web/images/fbcomment.png" />
	</p>
</body>
</html>
