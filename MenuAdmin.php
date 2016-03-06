<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
		  session_start();
		  if(!isset($_SESSION['admin']))
		 { header("Location: index.php");}
		  ?>


<title>Menú Administrador</title>

<link rel="stylesheet" type="text/css" href="header.css"/>

<link rel="stylesheet" type="text/css" href="posicionamientoPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="estiloPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="base.css"/>
<link rel="stylesheet" type="text/css" href="elementos.css"/>

<link rel="stylesheet" type="text/css" href="footer.css"/>
<link rel="stylesheet" type="text/css" href="body.css"/>
<link rel="stylesheet" type="text/css" href="botones.css"/>
<link rel="stylesheet" type="text/css" href="menuAdmin.css"/>


</head>



<body>

<div id="header">



          <div id="cont_header_h">
            <div id="menu_header_h"> 
			<a href="principalAdministrador.php" target="_self" >Inicio</a> 
			<!--<a href="BuenosAiresLogueado.php" target="_self"  >Buenos Aires</a> 
			<a href="RosarioLogueado.php" target="_self" >Rosario</a> 
			<a href="CordobaLogueado.php" target="_self" >Córdoba</a> 
			<a href="PreguntasFrecuentes.php" target="_self" >Preguntas Frecuentes</a> 
			<a href="Contacto.php" target="_self"  >Contacto</a> 
			<a href="Login.html" target="_self" >Login</a> 
			<a href="Registro.html" target="_self" >Regístrese</a>-->
			<a href="MenuAdmin.php" target="_self" >Admin</a>
			</div>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		  
		  
		  <div id="nombre_sesion">
		  <?php
		  
		echo "Bienvenido: ".$_SESSION['admin'];
		  ?>
		  <br />
		  <a class="link_salir" name="s"  href="salir.php">[Salir]</a> 
		  </div>
		  
		  
		  <a href="principalAdministrador.php"><img class="logo" src="imagen/logo.jpg" /></a>


   

</div><!-- #header -->
	

<div id="contenidoAdmin" class="menuAdmin">

<div id="abmUsuarios">
<table id="tableMenu" border="0" cellspacing="0" cellpadding="0"> 
  <thead>
  		<tr>
			<th colspan="1">ABM Usuarios</th>
		<tr>
  <thead>
  
  <tbody> 
      <td><div id="celdas">1- <a class="linksAdmin" href="FormAlta.html">Alta</a></div></td> 
  </tr> 
  <tr>  
    <td><div id="celdas">2- <a class="linksAdmin" href="FormModiIni.html ">Modificaci&oacute;n</a></div></td> 
  </tr> 
  <tr>  
    <td><div id="celdas">3- <a class="linksAdmin" href="FormBajaIni.html">Baja</a></div></td> 
  </tr> 
  <tr> 
    <td><div id="celdas">4- <a class="linksAdmin" href="Consulta.php">Listado Completo</a></div></td> 
  </tr> 
  </tbody>
</table>

<br></br>


</div>


<div id="abmInmuebles" >
<table border="0" cellspacing="0" cellpadding="0" id="tableMenuInmuebles" > 
  
  <thead>
  		<tr>
			<th colspan="1">ABM Inmuebles</th>
		<tr>
  <thead>
  
  <tbody>
  <tr>
    <td><div id="celdas">1- <a class="linksAdmin" href="registrarPropiedad.html">Alta</a></div></td> 
  </tr> 
  <tr>  
    <td><div id="celdas">2- <a class="linksAdmin" href="modificarEstado.html">Modificación de estado</a></div></td> 
  </tr> 
  <tr>  
    <td><div id="celdas">3- <a class="linksAdmin" href="modificarPrecio.html">Modificación de precio</a></div></td> 
  </tr> 
  <tr> 
    <td><div id="celdas">4- <a class="linksAdmin" href="FormBajaInmuebles.html">Baja</a></div></td> 
  </tr> 
   <tr> 
    <td><div id="celdas">5- <a class="linksAdmin" href="ConsultaInmuebles.php">Listado completo</a></div></td> 
  </tr> 
  <tbody>
</table>

<br></br>

</div>


</div>



<p class="parrafo" align="center"><a href="principalAdministrador.php"><strong>Volver al Inicio</strong></a></p> 







<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>
