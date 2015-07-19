<?php
/*
			<li><a href="index.php/login">Login</a></li>
			<li><a href="index.php/registro">Registrese</a></li>
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>*/ 
global $arrPages,$page_name;//$arrPages['index'] = "index.php";
//Empieza
$salida = '<nav class="clearfix">
			<ul>';
//echo("<pre>"); print_r($arrPages); echo("</pre>");
/*
//Recorro los menues
foreach ($arrPages as $key => $value) {
	if (array_key_exists('nombreenmenu', $value)) {
		$salida .= '<li  ';
		if ($page_name == $key) {
			$salida .= ' class="active" ';
		}
		$salida .= ' ><a href="/proylecturademo/index.php/'.$key.'">'.$value['nombreenmenu'].'</a></li> ';
	}
}
*/
$salida .= ' <li><a href="index.php/home">Mi bliblioteca</a></li> ';
$salida .= ' <li><a href="index.php/mensajes">Mensajes</a></li> ';
//Cierre
$salida .= '</ul>
		<a href="#" id="pull">Menu</a>
	</nav>';
echo $salida;
?>