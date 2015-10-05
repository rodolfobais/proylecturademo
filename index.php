<?php 
error_reporting(E_ALL);
ini_set("display_errors", 0);
/*
 * A Design by W3layouts
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
 *
 */
include 'configs/default.conf.php';
include 'classes/dataBase.class.php';
include "app/config.php";
include "app/detect.php";

//echo $page_name;die;
$arrPages = array();

$arrPages['index']['php'] = "indexsinlog.php";
$arrPages['login']['php'] = "login.php";
$arrPages['home']['php'] = "indexLogueado.php";$arrPages['home']['nombreenmenu'] = "Inicio";
$arrPages['registro']['php'] = "registro.php";
$arrPages['redactor']['php'] = "redactor.php";$arrPages['redactor']['nombreenmenu'] = "Centro de redaccion";
$arrPages['audiolibros']['php'] = "clients.php";$arrPages['audiolibros']['nombreenmenu'] = "Audio libros";
$arrPages['libros']['php'] = "libros.php";$arrPages['libros']['nombreenmenu'] = "Libros";
$arrPages['social']['php'] = "social.php";$arrPages['social']['nombreenmenu'] = "Social";
$arrPages['administrador']['php'] = "administrador.php";$arrPages['administrador']['nombreenmenu'] = "Administrador";
$arrPages['logout']['php'] = "indexsinlog.php";
$arrPages['mensajes']['php'] = "mensajes.php";
$arrPages['single']['php'] = "single.php";

if ($browser_t == "mobile") {
	$browser_t = "smartphone";
}
//$browser_t = "smartphone";
if(array_key_exists($page_name, $arrPages)){
	include $browser_t.'/'.$arrPages[$page_name]['php'];
}else{
	if ($page_name=='') {
		include $browser_t.'/indexsinlog.php';
	}else{
		include $browser_t.'/404.php';
	}
}
/*
if ($page_name=='') {
	include $browser_t.'/index.php';
} elseif ($page_name=='index.php') {
	include $browser_t.'/index.php';
} elseif ($page_name=='about.php') {
	include $browser_t.'/about.php';
} elseif ($page_name=='clients.php') {
	include $browser_t.'/clients.php';
} elseif ($page_name=='services.php') {
	include $browser_t.'/services.php';
} elseif ($page_name=='contact-post.php') {
	include 'app/contact.php';
}elseif ($page_name=='editor') {
	include $browser_t.'/editor.php';
} else {
	include $browser_t.'/404.php';
}
*/
?>
