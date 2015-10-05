<?php 




        // obtenemos los datos del archivo
       // $tamano = $_FILES["pdf"]['size'];
       // $tipo = $_FILES["pdf"]['type'];
        $archivo = $_FILES["pdf"]['name'];
        $prefijo = substr(md5(uniqid(rand())),0,6);
       
			//echo $_FILES['mp3']['tmp_name'];       
       
        if ($archivo != "") {
            $nom=date('Y-m-d H:i:s');
            $nombrearchivo = hash('md5',$nom); 
    
            include_once('servicio.php');
            $sql = "INSERT INTO libro (id,nombre,fecha,hash, id_genero, id_autor,image, sinopsis) 
            VALUES (0,'".$_POST['nombrelibro']."','".date('Y-m-d H:i:s')."','".$nombrearchivo."')";
            query($sql,0,1);

        
            //echo $nombrearchivo;   
            // guardamos el archivo a la carpeta files
            $destino =  "C:/xampp/htdocs/proylecturademo/web/uploads/".$nombrearchivo.'.pdf';
            if (copy($_FILES['pdf']['tmp_name'],$destino)) {
                $status = "Archivo subido: <b>".$archivo."</b>";
				header('Location: /proylecturademo/web/vistalibroupload/demo/iframe.php?upload=1');
            } else {
                $status = "Error al subir el archivo";
            }
        } else {
            $status = "Error al subir archivo";
        }


?>