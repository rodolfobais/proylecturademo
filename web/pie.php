<script src="js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.9.2.custom.min.js" type="text/javascript"></script>

<link href="css/footer.css" type="text/css"  rel="stylesheet"/>
<link href="css/jquery-ui-1.9.2.custom.min.css" type="text/css"  rel="stylesheet"/>


<?php
include('php/Playlists.php'); 
include('php/Tema.php');
include_once('versession.php');
include_once('../classes/dataBase.class.php');
include '../configs/default.conf.php';
include "../app/config.php";
$Tema = new Tema();
?>

<?php

$sql = "select p.nombre from playlist as p order by p.nombre";
$res = query($sql,0);

$arreglo_php = array();
if(mysql_num_rows($res)==0)
   array_push($arreglo_php, "No hay datos");
else{
  while($palabras = mysql_fetch_array($res)){
    array_push($arreglo_php, $palabras[0]);
  }
}
?>

<script>
  $(function(){
    var autocompletar = new Array();
    <?php //Esto es un poco de php para obtener lo que necesitamos
     for($p = 0;$p < count($arreglo_php); $p++){ ?>
       autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
     <?php } ?>
     $("#playlistbuscar").autocomplete({ //Usamos el ID de la caja de texto donde lo queremos
       source: autocompletar //Le decimos que nuestra fuente es el arreglo
     });
  });
</script>

<div class="footer" >
    <div class="reproductor" id="contenedorReproductor">
        <?php 
		$ultimaCreada = $Tema->traerUltimaPlaylist($_SESSION['login']);
		?>
        <embed src="reproductor/dewplayer-playlist.swf" height="200" width="240" wmode="transparent" flashvars="xml=playlists/<?php echo $ultimaCreada; ?>.xml&autoplay=0&autoreplay=1&randomplay=0&volume=100"></embed>
    </div>
    
    	<div class="playslistmias">
    	<h3>Playlist mias.</h3>
        <div class="playlists">
				<div id="playlistAgregadas">
			
               <?php 
							echo($ultimaCreada = $Tema->traerUltimaPlaylist($_SESSION['login']));
					?>
            
            </div>
        </div>
    	</div>

    </div>
    <div class="playlistbuscar">
		<p><input type="text" id="playlistbuscar" /> </p><span id="btn" onclick="buscarPlaylist();">Buscar</span>
		
			<div class="playlistresultados" id="playlistresultados">
			
			</div>
		    
    </div>
    
    
</div>