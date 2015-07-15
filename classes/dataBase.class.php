<?php
/**
 * ++Clase contenedora de las funciones de conexion a la base de datos
 * @author rodolfo.bais 
 */
class dataBase{
	public $msg = '';
	private $dir = '';
	private $dbConnect = '0';
	private $dbConn = "";
	//Arr con aracteres a buscar
	private $exp_regular = array();
	//Arr con caracteres de reemplazo
	private $cadena_nueva = array();
		
	function __construct($param, $noTranslate = ''){
		$this -> dir = $param;
		
		$pos = 0;
		$this -> exp_regular [$pos] = '/á/';
		$this -> cadena_nueva[$pos] = '&aacute;';$pos ++;
		$this -> exp_regular [$pos] = '/Á/';
		$this -> cadena_nueva[$pos] = '&Aacute;';$pos ++;
		$this -> exp_regular [$pos] = '/é/';
		$this -> cadena_nueva[$pos] = '&eacute;';$pos ++;
		$this -> exp_regular [$pos] = '/É/';
		$this -> cadena_nueva[$pos] = '&Eacute;';$pos ++;
		$this -> exp_regular [$pos] = '/í/';
		$this -> cadena_nueva[$pos] = '&iacute;';$pos ++;
		$this -> exp_regular [$pos] = '/Í/';
		$this -> cadena_nueva[$pos] = '&Iacute;';$pos ++;
		$this -> exp_regular [$pos] = '/ó/';
		$this -> cadena_nueva[$pos] = '&oacute;';$pos ++;
		$this -> exp_regular [$pos] = '/Ó/';
		$this -> cadena_nueva[$pos] = '&Oacute;';$pos ++;
		$this -> exp_regular [$pos] = '/ú/';
		$this -> cadena_nueva[$pos] = '&uacute;';$pos ++;
		$this -> exp_regular [$pos] = '/Ú/';
		$this -> cadena_nueva[$pos] = '&Uacute;';$pos ++;
		$this -> exp_regular [$pos] = '/à/';
		$this -> cadena_nueva[$pos] = '&agrave;';$pos ++;
		$this -> exp_regular [$pos] = '/À/';
		$this -> cadena_nueva[$pos] = '&Agrave;';$pos ++;
		$this -> exp_regular [$pos] = '/è/';
		$this -> cadena_nueva[$pos] = '&egrave;';$pos ++;
		$this -> exp_regular [$pos] = '/È/';
		$this -> cadena_nueva[$pos] = '&Egrave;';$pos ++;
		$this -> exp_regular [$pos] = '/ì/';
		$this -> cadena_nueva[$pos] = '&igrave;';$pos ++;
		$this -> exp_regular [$pos] = '/Ì/';
		$this -> cadena_nueva[$pos] = '&Igrave;';$pos ++;
		$this -> exp_regular [$pos] = '/ò/';
		$this -> cadena_nueva[$pos] = '&ograve;';$pos ++;
		$this -> exp_regular [$pos] = '/Ò/';
		$this -> cadena_nueva[$pos] = '&Ograve;';$pos ++;
		$this -> exp_regular [$pos] = '/ù/';
		$this -> cadena_nueva[$pos] = '&ugrave;';$pos ++;
		$this -> exp_regular [$pos] = '/Ù/';
		$this -> cadena_nueva[$pos] = '&Ugrave;';$pos ++;
		$this -> exp_regular [$pos] = '/ñ/';
		$this -> cadena_nueva[$pos] = '&ntilde;';$pos ++;
		$this -> exp_regular [$pos] = '/Ñ/';
		$this -> cadena_nueva[$pos] = '&Ntilde;';$pos ++;
		
	} 
	function dbConnect(){
		global $arrConf;
 		//echo "<pre>"; print_r($arrConf);echo "</pre>";
// 		echo "<br/>server: ".$_SERVER['DOCUMENT_ROOT']."<br/>";
// 		echo "<br/>path: ".$_SERVER['DOCUMENT_ROOT'].'/admin/configs/default.conf.php<br/>';
// 		echo "<br/>path: ".$_SESSION['rootSite'].'configs/default.conf.php';
		
		if ($this -> dbConnect == 1) {
			return true;
		}
		
		$this -> dbConnect = 1;
		
		//require($_SESSION['rootSite'].'configs/default.conf.php');
		
	    $dbConn = mysqli_connect( $arrConf['hostDB_NA'], $arrConf['userDB_NA'], $arrConf['passwordDB_NA'] );
	    $this -> dbConn = $dbConn;
	    if (!$dbConn) {
	    	$this -> msg = 'No pudo conectarse: ' . mysql_error();
	    	echo $this -> msg; 
	    	return false;
	    }/*
	    else{
	    	echo "<br/> 1 db false<br/>";
	    }
	    */
	    $dbConn = mysqli_select_db($dbConn, $arrConf['nameDB_NA'] );
		if (!$dbConn) {
	    	$this -> msg = 'No pudo seleccionarse la base (): ' . mysql_error();
	    	echo $this -> msg;
	    	return false;
	    }
	    /*else{
	    	echo "<br/> 2 db false<br/>";
	    }
	    */
	   
		return true;
	}
	
	function dbClose(){
	    mysql_close() or die( "Could not disconnect from database" );
// 		mysql_close();
	}	
	
	function QueryArray ($query){
		$this -> dbConnect();
		
		//echo "<br/> ".$query."<br/>";
		
		$sql =  mysql_query($query);
		$datos = mysql_fetch_array($sql) ;
		
		return $datos;
		$this -> dbClose();
	}
	
	function QueryFetchArray ($query){
// 		$this -> dbClose();
		$this -> dbConnect();
//  		echo "".$query."<br/>";
		$sql =  mysqli_query($this -> dbConn, $query);
// 		echo mysql_affected_rows()."<br/>";
		
		//$datos = mysql_fetch_array($sql) ;
		$datos = array();
		while ($fila = mysqli_fetch_array($sql, MYSQL_BOTH)) {
			foreach ($fila as $key => $value) {
				$fila[$key] = preg_replace($this -> exp_regular, $this -> cadena_nueva, $value);
			}
			
			$datos[] = $fila;
		}
	
		return $datos;
		$this -> dbClose();
	}
	
	
	function QuerySimple ($query){
		$this -> dbConnect();
		$sql =  mysql_query($query);
		
		return $sql;
		$this -> dbClose();
	}
	function QueryFetchArrayASSOC ($query)
	{
		$this -> dbConnect();
		//echo $query;
		$sql =  mysqli_query($this -> dbConn, $query);
		//$datos = mysql_fetch_array($sql) ;
		$datos = array();
		while ($fila = mysqli_fetch_array($sql, MYSQL_ASSOC)) {
			foreach ($fila as $key => $value) {
				$fila[$key] = preg_replace($this -> exp_regular, $this -> cadena_nueva, $value);
			}
			$datos[] = $fila;
		}
	
		return $datos;
		$this -> dbClose();
	}
	function QueryFetchArrayNum ($query)
	{		
		$this -> dbConnect();
		//echo $query;
		$sql =  mysql_query($query);
		//$datos = mysql_fetch_array($sql) ;
		$datos = array();
		while ($fila = mysql_fetch_array($sql,MYSQL_NUM)) {
			foreach ($fila as $key => $value) {
				$fila[$key] = preg_replace($this -> exp_regular, $this -> cadena_nueva, $value);
			}
			$datos[] = $fila;
		}
	
		return $datos;
		$this -> dbClose();
	}		
}		
?>
