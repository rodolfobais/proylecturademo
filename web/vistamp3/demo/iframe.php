<?php 
    session_start(); 
    if(isset($_GET['close']) and $_GET['close']==1){ // si vino la variable por get, destruye las variables de session
        $_SESSION['login']=0;
        $_SESSION['usuario']=''; 
        session_destroy();
    }
?>


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
    <form name="formmp3" method="POST" action="/proylecturademo/web/php/mp3.php" enctype="multipart/form-data">
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
        <div class="grid_1_of_4 images_1_of_4">
            <div class="button"><span ><input name="enviar" type="submit" value="Subir un audio" /></span>
            </div>        
        </div>	
    </form>
    </div>
</body>
</html>