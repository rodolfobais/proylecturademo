<?php
// session_start();
//base de datos
$arrConf['hostDB_NA']  = 'localhost';
$arrConf['userDB_NA'] = 'root';
$arrConf['passwordDB_NA'] = '';
$arrConf['nameDB_NA'] = 'librofinal';

$arrPages = array();

$arrPages['index']['php'] = "indexsinlog.php";
$arrPages['login']['php'] = "login.php";
$arrPages['home']['php'] = "homeframe.php";$arrPages['home']['nombreenmenu'] = "Inicio";
$arrPages['registro']['php'] = "registro.php";
$arrPages['redactor']['php'] = "redactor.php";$arrPages['redactor']['nombreenmenu'] = "Centro de redaccion";
$arrPages['audiolibros']['php'] = "clients.php";$arrPages['audiolibros']['nombreenmenu'] = "Audio libros";
$arrPages['social']['php'] = "social.php";$arrPages['social']['nombreenmenu'] = "Social";
$arrPages['administrador']['php'] = "administrador.php";$arrPages['administrador']['nombreenmenu'] = "Administrador";
$arrPages['logout']['php'] = "indexsinlog.php";
$arrPages['mensajes']['php'] = "mensajes.php";

// define ('_COMPANY','Nuevo Amanecer');
//$_SESSION['_COMPANY'] = 'OutBoxFactory';
//$_SESSION['_TITLE'] = 'OutBoxFactory';
// define ('_VERSION','0.1');
//$_SESSION['_VERSION'] = '0.1';
?>
