<!DOCTYPE html>

<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--<link rel="stylesheet" type="text/css" href="../source/iframe-style.css" />	-->

<style> 
.title {	
	margin-left: 40%;
	width: 50%;
	font-family: arial;
	font-size: 20px;
	font-weight: bold;
	color: black;
}

.text{
	margin-left: 18%;
}

#image {
	width: 30%;
	height: 30%;
}

#description{
	float: right;
	width: 50%;
	margin-top: -150px;
}

.button{margin-left: 40%;}

.cont2{	margin-left: 30%;}

.btn {
	width: 100px;
	height: 30px;
  -webkit-border-radius: 15;
  -moz-border-radius: 15;
  border-radius: 15px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 12px;
  background: #282f33;
  padding: 5px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3c474f;
  text-decoration: none;
  cursor: pointer;
}
</style>
			
	    
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
  			<div class="cont1">
	         	<span class="title">Nuevo clasificado</span><br/><br/>
         		<span class="text">Publique un nuevo clasificado para que otros usuarios puedan participar de sus proyectos.</span><br/><br/>
         	</div>
   	  		<div class="cont2">
   	  			<textarea rows="10" cols="40"></textarea><br/><br/>               
         	</div>
	        <div class="cont3">
   	  			<span class="button">
   	  				<a class="btn" href="#" onclick = "guardarClasificado()">
   	  					Publicar clasificado
   	  				</a>
   	  			</span>
         	</div>		
		</div>
	</body>
</html>
  