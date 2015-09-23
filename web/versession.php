<?php

	session_start();

	if($_SESSION["login_user"] == "" && $_COOKIE[$cookie_user] =="")
		header("location: login");
	//echo "<pre>"; print_r($_SESSION); echo "</pre>";die;
	

?>