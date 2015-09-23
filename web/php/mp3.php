<?php 




        // obtenemos los datos del archivo
        $tamano = $_FILES["mp3"]['size'];
        $tipo = $_FILES["mp3"]['type'];
        $archivo = $_FILES["mp3"]['name'];
        $prefijo = substr(md5(uniqid(rand())),0,6);
       
			//echo $_FILES['mp3']['tmp_name'];       
       
        if ($archivo != "") {
            $nom=date('Y-m-d H:i:s');
            $nombrearchivo = hash('md5',$nom); 
    
            include_once('servicio.php');
            $sql = "INSERT INTO audiolibro (id,nombre,fecha,hash) 
            VALUES (0,'".$_POST['nombreaudiolibro']."','".date('Y-m-d H:i:s')."','".$nombrearchivo."')";
            query($sql,0,1);

        
            //echo $nombrearchivo;   
            // guardamos el archivo a la carpeta files
            $destino =  "C:/xampp/htdocs/proylecturademo/web/uploads/".$nombrearchivo.'.mp3';
            if (copy($_FILES['mp3']['tmp_name'],$destino)) {
                $status = "Archivo subido: <b>".$archivo."</b>";
				header('Location: /proylecturademo/web/vistamp3/demo/iframe.php?upload=1');
            } else {
                $status = "Error al subir el archivo";
            }
        } else {
            $status = "Error al subir archivo";
        }


?>