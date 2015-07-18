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
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="../source/iframe-style.css" />
    <link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
</head>
<body>

	<div id="columna_centro">
        
    <h4>SUBIR ARCHIVO DE AUDIO</h4>	
    <?php 
        if(isset($_GET['upload'])){
        echo 'Subido con éxito';
        }
    ?>
    	  <form name="formmp3" method="POST" action="php/mp3.php" enctype="multipart/form-data">
  			<div class="cont">
         	
         	<br />
         	<input type="file" id="mp3" value="" name="mp3"  /> 
            <br/>
         </div>
              <br/>
   	  <div class="cont">
         	<label style="margin-left:10px;">Nombre del Audiolibro: </label>
         	<br />
         	<input type="text" id="nombreaudiolibro" name="nombreaudiolibro" value="" />                
         </div>
        
        <input type="hidden" id="idusuario" name="idusuario" value="<?php echo $_SESSION['login']; ?>" />
        <div class="cont">
        
        	<br/>
        
        </div>
        <div class="cont">
        <label style="margin-left:10px;">Autor: </label>
        	<br/>
        <label id="autor" name="autor">
        <input type="text" id="nombreaudiolibro" name="nombreaudiolibro" value="" /> 
        </label>
        </div>    
        <div class="grid_1_of_4 images_1_of_4">
                       
                        <div class="button"><span ><a class="fancybox-manual-mp3" href="javascript:;" name="1" href="#">Subir un Audio</a></span></div>
                        
                    </div>	
    </form>
    </div>
    <br/><br/><br/><br/><br/>
</body>
</html>
  <?php mysql_close($conn); ?>