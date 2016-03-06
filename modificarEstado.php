<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />




<title>Modificar Usuario</title>

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
		  
		  <a href="principalAdministrador.php"><img class="logo" src="imagen/logo.jpg" /></a>


   

</div><!-- #header -->

<div id="contenido" class="menuEstadoInm">

<?php 
include ("conexion.inc"); 
//Captura datos desde el Form anterior 
$vIdProp = $_POST['id']; 
//Arma la instrucción SQL y luego la ejecuta 
$vSql = "SELECT * FROM inmuebles WHERE id ='$vIdProp' "; 
$vResultado = mysql_query($vSql, $link) or die (mysql_error());; 
$fila = mysql_fetch_array($vResultado); 
if(mysql_num_rows($vResultado) == 0) { 
       echo ("El inmueble no existe <br>"); 
       echo ("<A href='modificarEstado.html'>Continuar</A>"); 
} 
else{ 
?> 

<div id="formModi">

<FORM  action="modiEstado.php" method="POST" name="FormModiEstado"> 
<table id="tableModi"> 
<thead>
  	<tr>
		<th colspan="2">Modificación de estado</th>
	</tr>
  </thead>
  <tbody>
<tr>  
      <td width="103"> ID: </td> 
      <td width="243"> <input type="text"  name="id" value="<?php echo($fila['id']); ?>" readonly>
	  </td> 
</tr> 
<tr>  
      <td width="103"> Estado: </td> 
      <td width="243"> 
	  
	  			<?php if( $fila['estado'] == "Disponible"){ ?>
	  			<select name="estado"> 
				<option value="Disponible" selected="selected">Disponible</option> 
				<option value="Alquilado">Alquilado</option> 
				<option value="Vendido">Vendido</option> 
				</select>
	  <?php } ?>
	  
	  			<?php if( $fila['estado'] == "Alquilado"){ ?>
	  			<select name="estado"> 
				<option value="Disponible">Disponible</option> 
				<option value="Alquilado" selected="selected">Alquilado</option> 
				<option value="Vendido">Vendido</option> 
				</select>
	  <?php } ?>
	  
	  
	  			<?php if( $fila['estado'] == "Vendido"){ ?>
	  			<select name="estado"> 
				<option value="Disponible">Disponible</option> 
				<option value="Alquilado">Alquilado</option> 
				<option value="Vendido" selected="selected">Vendido</option> 
				</select>
	  <?php } ?>
	  
	  </td> 
</tr> 
<tr>  
      <td colspan="1" align="center"> <input type="submit" name="Submit" value="Modificar">     </td> 
	  <td colspan="1" align="left">	<a href="modificarEstado.html"><input type="button"  name="Submit" value="Cancelar" onClick="modificarEstado.html"></a>           </td> 
        </tr> 
</tbody>
</table> 

</FORM> 

<?php 
} 
// Liberar conjunto de resultados 
mysql_free_result($vResultado); 
// Cerrar la conexion 
mysql_close($link); 
?>
</div>
</div>



<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>

</body>
</html>