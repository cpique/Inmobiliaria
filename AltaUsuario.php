<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<title>Alta usuario</title>

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
			<a href="#" target="_self" >Córdoba</a> 
			<a href="#" target="_self" >Preguntas Frecuentes</a> 
			<a href="Contacto.php" target="_self"  >Contacto</a> 
			<a href="Login.html" target="_self" >Login</a> 
			<a href="Registro.html" target="_self" >Regístrese</a>-->
			<a href="MenuAdmin.php" target="_self" >Admin</a>
			</div>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		  
		  <a href="principalAdministrador.php"><img class="logo" src="imagen/logo.jpg" /></a>


   

</div><!-- #header -->

<div id="contenido" class="menuAltaModif">
<?php 
include ("conexion.inc"); 
$vNombre = $_POST ['nombre']; 
$vApellido = $_POST ['apellido'];
$vDni = $_POST ['dni'];

$vLocalidad = $_POST ['localidad'];

$vProv=0;
if($vLocalidad == "Buenos Aires")
	{ $vProv = 1; }
elseif($vLocalidad == "Córdoba")
	{ $vProv = 2; }
else {  $vProv = 3; }


$vProvincia = $vProv;

$vEmail = $_POST ['email'];
$vUsuario = $_POST ['usuario'];
$vPass = $_POST ['contraseña'];
$vTipo = $_POST ['tipo'];
 
$vSql = "SELECT COUNT(dni) FROM usuarios WHERE dni='$vDni' OR usuario='$vUsuario'"; 
$vResultado = mysql_query($vSql, $link); 
$vCantUsuarios = mysql_result($vResultado, 0); 
if ($vCantUsuarios != 0){ 
       echo ("El usuario ya existe<br>"); 
       echo ("<A href='FormAlta.html'>Volver al registro</A>"); 
} 
else { 
$vSql = "INSERT INTO usuarios (nombre, apellido, dni, provincia, localidad, email, usuario, contraseña, tipo)  
values ('$vNombre', '$vApellido', '$vDni', '$vProvincia', '$vLocalidad', '$vEmail', '$vUsuario', '$vPass', '$vTipo')";
       mysql_query($vSql, $link) or die (mysql_error()); 
      echo("El usuario fue registrado, pronto enviaremos un email confirmando el regisrto <br>"); 
       echo ("<A href='MenuAdmin.php'>Volver al menú</A>"); 
 // Liberar conjunto de resultados 
 mysql_free_result($vResultado); 
} 
// Cerrar la conexion 
mysql_close($link);  
?> 
</div>

<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>