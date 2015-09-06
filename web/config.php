<?php

session_start(); // Start Session

$conn = mysql_connect("localhost","root","");
mysql_select_db("librofinal",$conn);

header('Cache-control: private'); // IE 6 FIX
 
// always modified
header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
// HTTP/1.1
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
// HTTP/1.0
header('Pragma: no-cache');
 

//---------------- Login --------------------------//

		$config_username = isset($_POST["mail"]) ? $_POST["mail"] : "";
		$config_password = isset($_POST["password"]) ? $_POST["password"] : "";


		$sql="SELECT nombre, id, admin FROM usuario WHERE mail ='$config_username' and password='$config_password'";
		$result=mysql_query($sql,$conn);
		$row=mysql_fetch_array($result);
		$count=mysql_num_rows($result);

		if($count==1)
		{
		session_start();
			$_SESSION['login_user']=$usuario;
			$_SESSION["idUsuarioLogueado"] = $row[1];
        	$_SESSION["rolUsuario"] = $row[2];

        }	
// ---------- Cookie Info ---------- //
 
$cookie_name = 'siteAuth';
$cookie_time = (3600 * 24 * 30); // 30 days
 
// ---------- Invoke Auto-Login if no session is registered ---------- //
 
if(!$_SESSION['username'])
{
	if(isSet($cookie_name))
	{
	    // Check if the cookie exists
		if(isSet($_COOKIE[$cookie_name]))
	    {
	    parse_str($_COOKIE[$cookie_name]);
	 
	    // Make a verification
	 
	   		if(($usr == $config_username) && ($hash == md5($config_password)))
	        {
	        // Register the session
	        $_SESSION['username'] = $config_username;
	        }
	    }
	}
}
?>