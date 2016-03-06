<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />




<title>Listado Usuarios</title>

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
		  
		   <a href="principalAdministrador.php"><img class="logo" src="imagen/logo.jpg" alt="Imagen Logo" title="Imagen Logo" /></a>


   

</div><!-- #header -->

<div id="contenido" class="formConsulta">
<div id="formConsulta">
<?php  
include("conexion.inc"); 
$vSql = "SELECT * FROM usuarios ORDER BY apellido, nombre"; 
$vResultado = mysql_query($vSql, $link); 
$total_registros=mysql_num_rows($vResultado); 
?> 
<table border="2" id="tableConsulta"> 

 <thead>
  	<tr>
		<th colspan="7">Usuarios registrados</th>
	</tr>
  </thead>
  <tbody>

<tr> 
<td width="100" align="center"><b>Nombre</b></td> 
<td width="100" align="center"><b>Apellido</b></td> 
<td width="70" align="center"><b>DNI</b></td> 
<!--<td width="100" align="center"><b>Provincia</b></td> -->
<td width="100" align="center"><b>Localidad</b></td> 
<td width="200" align="center"><b>Email</b></td> 
<td width="100" align="center"><b>Usuario</b></td> 
<td width="100" align="center"><b>Tipo</b></td> 
</tr> 
<?php 
while ($fila = mysql_fetch_array($vResultado))  
{ 
?> 
<tr> 
            <td width="100" align="center"><?php echo ($fila['nombre']); ?></td> 
			<td width="100" align="center"><?php echo ($fila['apellido']); ?></td>
            <td width="70" align="center"><?php echo ($fila['dni']); ?></td> 
			<td width="100" align="center"><?php echo ($fila['localidad']); ?></td>
            <td width="200" align="center"><?php echo ($fila['email']); ?></td> 
			<td width="100" align="center"><?php echo ($fila['usuario']); ?></td>
			<td width="100" align="center"><?php echo ($fila['tipo']); ?></td>
</tr>    
<tr> 
              <td colspan="7"> 
<?php 
}  
// Liberar conjunto de resultados 
mysql_free_result($vResultado); 
// Cerrar la conexion 
mysql_close($link); 
?> 
              </td> 
</tr> 
</tbody>
</table> 
<p>&nbsp;</p> 
<p class="parrafo2"><a href="MenuAdmin.php">Volver al men&uacute; del ABM</a></p> 
</div><!--formConsulta-->
</div>

<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>