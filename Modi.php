<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<title>Modificaci�n</title>

<link rel="stylesheet" type="text/css" href="header.css"/>

<link rel="stylesheet" type="text/css" href="posicionamientoPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="estiloPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="base.css"/>
<link rel="stylesheet" type="text/css" href="elementos.css"/>

<link rel="stylesheet" type="text/css" href="footer.css"/>
<link rel="stylesheet" type="text/css" href="body.css"/>
<link rel="stylesheet" type="text/css" href="botones.css"/>



</head> 
<body> 

<div id="header">



          <div id="cont_header_h">
            <div id="menu_header_h"> 
			<a href="principalAdministrador.php" target="_self" >Inicio</a> 
			<!--<a href="BuenosAires.php" target="_self"  >Buenos Aires</a> 
			<a href="#" target="_self" >Rosario</a> 
			<a href="#" target="_self" >C�rdoba</a> 
			<a href="#" target="_self" >Preguntas Frecuentes</a> 
			<a href="Contacto.php" target="_self"  >Contacto</a> 
			<a href="Login.html" target="_self" >Login</a> 
			<a href="Registro.html" target="_self" >Reg�strese</a>-->
			<a href="MenuAdmin.php" target="_self" >Admin</a>
			</div>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		  
		  <a href="principalAdministrador.php"><img class="logo" src="imagen/logo.jpg" /></a>


   

</div><!-- #header -->

<div id="contenido" class="menuModif">

<?php 
include ("conexion.inc"); 
//Captura datos desde el Form anterior 
$vNombre = $_POST ['nombre']; 
$vApellido = $_POST ['apellido'];
$vDni = $_POST ['dni'];

$vLocalidad = $_POST ['localidad'];

$vProv=0;
if($vLocalidad == "Buenos Aires")
	{ $vProv = 1; }
elseif($vLocalidad == "C�rdoba")
	{ $vProv = 2; }
else {  $vProv = 3; }


$vProvincia = $vProv;

$vEmail = $_POST ['email'];
$vUsuario = $_POST ['usuario'];
$vTipo = $_POST ['tipo'];
//Arma la instrucci�n SQL y luego la ejecuta 
$vSql = "UPDATE usuarios set nombre='$vNombre', apellido='$vApellido', dni='$vDni', provincia='$vProvincia', 
         localidad='$vLocalidad', email='$vEmail', usuario='$vUsuario', tipo='$vTipo' where usuario='$vUsuario'"; 
mysql_query($vSql, $link) or die (mysql_error()); 
echo("El Usuario fue modificado correctamente<br>"); 
echo("<A href= 'MenuAdmin.php'>Volver a men�</A>"); 
// Cerrar la conexion 
mysql_close($link); 
?> 

</div>


<div id="footer"><div id="footerhijo">Ingenier�a en Sistemas de Informaci�n - Universidad Tecnol�gica Nacional Rosario</div></div>


</body>
</html>