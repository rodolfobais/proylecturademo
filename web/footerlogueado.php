
<script type="text/javascript" src="/proylecturademo/web/js/ajax.js"></script>
<script type="text/javascript" src="/proylecturademo/web/js/footer.js"></script>
<script type="text/javascript">
	function abrirReproductor(){
		$("#reproductor").toggle();
	}
</script>
<link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
<div class="footer"> 
	<div class="wrap"> 
		<div class="footer-left">
			Users online: pepe argento | Juana de arco | Jorgito
		</div>
		<div class="footer-right">
			<p><a href="#" onclick = "abrirReproductor()">ABRIR REPRODUCTOR</a></p>
		</div>
		<div class=="clear"> </div>
	</div>
	<div class="clear"> </div>
</div>
<div id = "reproductor" style="position: fixed; right: 0px; bottom: 40px; width: 200px;display:none;">

        
        <embed src="/proylecturademo/web/reproductor/dewplayer-playlist.swf" height="200" width="240" wmode="transparent" flashvars="xml=listas/<?php echo $ultimaCreada; ?>.xml&autoplay=0&autoreplay=1&randomplay=0&volume=100"></embed>
  
</div>
				
