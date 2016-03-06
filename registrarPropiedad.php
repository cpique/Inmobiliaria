<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<title>Registrar propiedad</title>

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

<div id="contenido" class="menuAltaInm">
<?php  
 
 include("conexion.inc");

//Captura datos desde el Form anterior 

$vId = $_POST['id']; 
$vUbicacion = $_POST['ubicacion']; 


$t = 0;
if($_POST['tipo'] == "Casa")
	{ $t = 1; }
elseif($_POST['tipo'] == "Departamento")
	{ $t = 2; }
else {  $t = 3; }

$vTipo = $t; 



$e = 0;
if($_POST['estado'] == "Disponible")
	{ $e = "Disponible"; }
elseif($_POST['estado'] == "Alquilado")
	{ $e = "Alquilado"; }
else {  $e = "Vendido"; }
$vEstado = $e; 



$v = 0;
if($_POST['localidad'] == "Buenos Aires")
	{ $v = 1; }
elseif($_POST['localidad'] == "Córdoba")
	{ $v = 2; }
else {  $v = 3; }

$vLocalidad = $v;
$vProvincia = $v;



$vFecha = $_POST['fecha']; 
$vPrecio = $_POST['precio'];




$uploadedfileload="true";
$uploadedfile_size=$_FILES['imagen']['size'];
echo $_FILES['imagen']['name'];
if ($_FILES['imagen']['size']>200000)
{"El archivo es mayor que 200KB, debes reduzcirlo antes de subirlo<BR>";
$uploadedfileload="false";}

if (!($_FILES['imagen']['type'] =="image/jpeg" OR $_FILES['imagen']['type'] =="image/gif" OR $_FILES['imagen']['type'] =="image/jpg"))
{" Tu archivo tiene que ser JPG o GIF. Otros archivos no son permitidos<BR>";
$uploadedfileload="false";}

$file_name=$_FILES['imagen']['name'];
$add="imagen/$file_name";
if($uploadedfileload=="true"){

if(move_uploaded_file ($_FILES['imagen']['tmp_name'], $add)){

}else{echo "Error al subir el archivo";}

}else{echo "msg";}


$vImagen = $file_name; 



 
//Arma la instrucción SQL y luego la ejecuta 
$vSql = "SELECT Count(id) FROM inmuebles WHERE id='$vId'"; 
$vResultado = mysql_query($vSql, $link) or die (mysql_error());; 
$vCantId = mysql_result($vResultado, 0); 
if ($vCantId != 0){ 
       echo ("El inmueble ya existe<br>"); 
       echo ("<A href='registrarPropiedad.html'>Volver al registro</A>"); 
} 
else { 
$vSql = "INSERT INTO inmuebles (id, ubicacion, tipo, estado, localidad, provincia, imagen)  
values ('$vId', '$vUbicacion', '$vTipo', '$vEstado', '$vLocalidad', '$vProvincia', '$vImagen')"; 
       mysql_query($vSql, $link) or die (mysql_error()); 
	   $vSql = "INSERT INTO precio(idInmueble, fechaDesde, precio)  
values ('$vId', '$vFecha', '$vPrecio')"; 
mysql_query($vSql, $link) or die (mysql_error());
      echo("	El inmueble fue registrado correctamente<br>"); 
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