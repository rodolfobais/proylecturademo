<!DOCTYPE html>

<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
		<link rel="stylesheet" type="text/css" href="../source/iframe-style.css" />
	    <link href="/proylecturademo/web/css/style.css" rel="stylesheet" type="text/css"  media="all" />
	    <script type="text/javascript" src = "/proylecturademo/web/js/jquery.min.js"></script>
	    <script type="text/javascript" src="/proylecturademo/web/vistalibro/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="/proylecturademo/web/vistalibro/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	    <script type="text/javascript">
			function guardarClasificado(){
				alert("clasificado guardado correctamente");
				//$.fancybox.close();
				$(".fancybox-overlay", window.parent.document).click();
			}
	    </script>
	</head>
	<body>	
		<div id="columna_centro">
  			<div class="cont">
	         	Nuevo clasificado
         	</div>
   	  		<div class="cont">
   	  			<textarea rows="10" cols="40"></textarea>                
         	</div>
	        <div class="cont">
   	  			<span class="button">
   	  				<a style="background: #AB7A20;" href="#" onclick = "guardarClasificado()">
   	  					Nuevo clasificado
   	  				</a>
   	  			</span>
         	</div>		
		</div>
		<br/><br/><br/><br/><br/>
	</body>
</html>
  <?php mysql_close($conn); ?>