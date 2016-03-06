<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />



<title>Baja inmueble</title>

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


<div id="contenido" class="menuBajaInm">
<?php 
include ("conexion.inc"); 
$vInmueble = $_POST ['inmueble']; 
$vSql = "SELECT * FROM inmuebles WHERE id ='$vInmueble' "; 
$vResultado = mysql_query($vSql, $link); 
if(mysql_num_rows($vResultado) == 0)  
     {  
       echo ("Inmueble inexistente <br>"); 
       echo ("<A href='FormBajaInmuebles.html'>Continuar</A>"); 
} 
else{ 
 //Arma la instrucción SQL y luego la ejecuta 
$vSql= "DELETE inmuebles,precio FROM inmuebles INNER JOIN precio ON inmuebles.id=precio.idInmueble
WHERE id = '$vInmueble' "; 
mysql_query($vSql, $link); 
        echo("El Inmueble fue borrado correctamente<br>"); 
        echo("<A href='MenuAdmin.php'>Volver al menú del ABM</A>"); 
} 
// Liberar conjunto de resultados 
mysql_free_result($vResultado); 
// Cerrar la conexion 
mysql_close($link); 
?> 
</div>

<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>