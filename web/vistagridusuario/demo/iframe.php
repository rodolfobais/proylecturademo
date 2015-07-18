	<?php 

	session_start();

	$conn = mysql_connect("localhost","root","");
	mysql_select_db("librofinal",$conn);

	$id = isset($_GET['id']) ? $_GET['id'] : "";
	
	$query = "select * from usuario where id = '$id'";
	$resultado = mysql_query($query, $conn);
	$tabla = mysql_fetch_assoc($resultado);
	?>

<!DOCTYPE html>

<html>
<head>
	
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="../source/iframe-style.css" />

</head>
<body>



	<p >
		<!--<a href="javascript:parent.jQuery.fancybox.close();">Close iframe parent</a>
		|
		<a href="javascript:parent.jQuery.fancybox.open({href : '1_b.jpg', title : 'My title'});">Change content</a>
	-->
<img src="/proylecturademo/web/vistagridusuario/demo/grilla.png" />

</body>
</html>
  <?php mysql_close($conn); ?>