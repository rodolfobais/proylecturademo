<?php
session_start();

session_destroy();
$_SESSION['login_user']="";
$_SESSION["idUsuarioLogueado"] = "";
$_SESSION["rolUsuario"] = "";

//echo "<pre>"; print_r($_SESSION); echo "</pre>";die;
header("location:../index.php/login");
?>