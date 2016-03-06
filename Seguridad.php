
<?php
include("conexion.inc");
@session_start(); 
$_SESSION["autentificado"] = false;

if($_SESSION["autentificado"] != true)
	{
		
		header("Location: index.php");
		exit();
	}
?>
