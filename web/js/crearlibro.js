
function buscar(){
            var busqueda = document.getElementById('audiolibro').value;
			$.ajax({
				url: "/proylecturademo/web/php/audiolibro_gw.php?op=bu",//Le paso las variables a esta url Nota: envio con opcion "mo"
				type: "POST", //a travès de POST
				data: 'busqueda='+busqueda,		
				cache: false,
				success: function (html) {	//Devuelve la respuesta de la url en la variable html			
					
					 document.getElementById('audiolibrosencontrados').innerHTML=html;
                   
				}		
			});
        }
		
