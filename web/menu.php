<?php 
global $arrPages,$page_name;//$arrPages['index'] = "index.php";
//Empieza
$salida = '<div class="header-nav">
					<div class="wrap">
					<div class="left-nav">
						<ul>';
//echo("<pre>"); print_r($arrPages); echo("</pre>");

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

//Cierre
$salida .= '</ul>
					</div>
					<div class="right-social-icons">
						<ul>
							<li><a class="icon1" href="#"> </a></li>
							<li><a class="icon2" href="#"> </a></li>
							<li><a class="icon3" href="#"> </a></li>
							<li><a class="icon4" href="#"> </a></li>
						</ul>
					</div>
					<div class="clear"> </div>
				</div>
			</div>';
echo $salida;
?>