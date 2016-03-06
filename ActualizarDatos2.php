<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
		  session_start();
		  if(!isset($_SESSION['usuario']))
		 { header("Location: index.php");}
		  ?>

<title>Modificación</title>

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
			<a href="principalUsuario.php" target="_self" >Inicio</a> 
			<a href="BuenosAiresLogueado.php" target="_self"  >Buenos Aires</a> 
			<a href="RosarioLogueado.php" target="_self" >Rosario</a> 
			<a href="CordobaLogueado.php" target="_self" >Córdoba</a> 
			<a href="PreguntasFrecuentes.php" target="_self" >Preguntas Frecuentes</a> 
			<a href="Contacto.php" target="_self"  >Contacto</a> 
			<a href="Newsletter.php" target="_self">Newsletter</a>
			<a href="ActualizarDatos.php" target="_self">Actualizar Datos</a>
			</div>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		   <div id="nombre_sesion">
		  <?php
		  
		echo "Bienvenido: ".$_SESSION['usuario'];
		  ?>
		  <br />
		  <a class="link_salir" name="s"  href="salir.php">[Salir]</a> 
		  </div>
		  <a href="principalUsuario.php"><img class="logo" src="imagen/logo.jpg" alt="Imagen Logo" 
				title="Imagen Logo" /></a>

   

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
elseif($vLocalidad == "Córdoba")
	{ $vProv = 2; }
else {  $vProv = 3; }


$vProvincia = $vProv;

$vEmail = $_POST ['email'];
$vUsuario = $_POST ['usuario'];

//Arma la instrucción SQL y luego la ejecuta 
$vSql = "UPDATE usuarios set nombre='$vNombre', apellido='$vApellido', dni='$vDni', provincia='$vProvincia', 
         localidad='$vLocalidad', email='$vEmail', usuario='$vUsuario', where usuario='$vUsuario' "; 
mysql_query($vSql, $link) or die (mysql_error()); 
echo("El Usuario fue modificado correctamente<br>"); 
echo("<A href= 'MenuAdmin.php'>Volver a menú</A>"); 
// Cerrar la conexion 
mysql_close($link); 
?> 

</div>


<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>