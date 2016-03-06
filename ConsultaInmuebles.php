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
$vSql = "SELECT id, ubicacion, tipo, estado, localidad, precio.precio 

	FROM inmuebles
	INNER JOIN precio ON inmuebles.id= precio.idInmueble INNER JOIN (SELECT precio.idInmueble, max(precio.fechaDesde) as max_fecha, precio.precio
	FROM precio
	GROUP BY precio.idInmueble) as R
	ON inmuebles.id=R.idInmueble
	WHERE precio.fechaDesde=R.max_fecha
	GROUP BY inmuebles.id"; 

$vResultado = mysql_query($vSql, $link); 
$total_registros=mysql_num_rows($vResultado); 
?> 
<table border="2" id="tableInmuebles"> 

 <thead>
  	<tr>
		<th colspan="6">Inmuebles registrados</th>
	</tr>
  </thead>
  <tbody>

<tr> 
<td width="100" align="center"><b>ID</b></td> 
<td width="100" align="center"><b>Ubicación</b></td> 
<td width="70" align="center"><b>Tipo</b></td> 
<td width="100" align="center"><b>Estado</b></td> 
<td width="100" align="center"><b>Localidad</b></td> 
<td width="100" align="center"><b>Precio</b></td> 
</tr> 
<?php 
while ($fila = mysql_fetch_array($vResultado))  
{ 
?> 
<tr> 
            <td width="100" align="center"><?php echo ($fila['id']); ?></td> 
			<td width="100" align="center"><?php echo ($fila['ubicacion']); ?></td>
            <td width="100" align="center">
				<?php if($fila['tipo'] == 1) 
						{echo "Casa";}
						
					  elseif($fila['tipo']==2)
					  	{echo "Departamento";}
					  
					  else {echo "Terreno";}	 
				?>
			</td> 
			
			
			<td width="100" align="center"><?php echo ($fila['estado']); ?></td>
			
			<td width="100" align="center">
				<?php if($fila['localidad'] == 1) 
						{echo "Buenos Aires";}
						
					  elseif($fila['localidad']==2)
					  	{echo "Córdoba";}
					  
					  else {echo "Rosario";}	 
				?>
			</td>
			<td width="100" align="center"><?php echo ($fila['precio']); ?></td>
			
</tr>    
<tr> 
              <td colspan="6"> 
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