
<?php 
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

$arrPages['index'] = "index.php";
$arrPages['login'] = "login.php";
$arrPages['home'] = "indexLogueado.php";
$arrPages['audiolibros'] = "clients.php";
$arrPages['registro'] = "registro.php";


if(array_key_exists($page_name, $arrPages)){
	include $browser_t.'/'.$arrPages[$page_name];
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
