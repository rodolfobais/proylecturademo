error_reporting(E_ALL);
ini_set('display_errors', 1);
//include_once 'classes/dataBase.class.php';
$db = new dataBase('');
$sql = "SELECT id, nombre FROM libro"; 
//$result = $db -> QueryFetchArrayASSOC($sql);
//echo "<pre>"; print_r($result);echo "</pre>";
/*
array[0][id] -> 1
array[0][nombre] -> el lago de los cisnes


array[1][id] -> 1234543654765
array[1][nombre] -> libro 1342
*/



$arrSliderHeader = array();
$pos = 0;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas recomendado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;

$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Lo mas descargado";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat".$pos2;


$pos++;$pos2 = 0;
$arrSliderHeader[$pos]['titulo'] = "Ultimos publicados";
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g1.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g2.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;
$pos2++;
$arrSliderHeader[$pos]['contenido_'.$pos2]['img'] = "web/images/g3.jpg";
$arrSliderHeader[$pos]['contenido_'.$pos2]['txt'] = "asdDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat publicados ".$pos2;


$slider = '';
foreach ($arrSliderHeader as $key => $value) {
	$slider .= '
	<li>	
		<table>
			<tr><td colspan = 3><h4>'.$value['titulo'].'</h4></td></tr>
      		<tr>
      			<td>
	    			<img src="'.$value['contenido_0']['img'].'"><br/><p>'.$value['contenido_0']['txt'].'</p>		
	    		</td>
	    		<td>
	    			<img src="'.$value['contenido_1']['img'].'"><br/><p>'.$value['contenido_1']['txt'].'</p>		
	    		</td>
	      		<td>
	      			<img src="'.$value['contenido_2']['img'].'"><br/><p>'.$value['contenido_2']['txt'].'</p>		
	      		</td>
	   		</tr>
   		</table>
	</li>';
}

$sql = "SELECT nombre FROM libro";
$misTrabajosArr = $db -> QueryFetchArrayASSOC($sql);
$misTrabajos = '<ul style = "list-style-type: circle;">';
foreach ($misTrabajosArr as $key => $value) {
	$misTrabajos .= '
	<li>
		<a href="#">'.$value['nombre'].'</a>
	</li>';
}
$misTrabajos .= '</ul>';
//echo "<pre>"; print_r($misTrabajosArr);echo "</pre>";