<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />




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

<div id="contenido" class="menuPrecioInm">


<?php 
include ("conexion.inc"); 
//Captura datos desde el Form anterior 
$vId = $_POST['idInmueble']; 
//Arma la instrucción SQL y luego la ejecuta 
$vSql = "SELECT * FROM precio WHERE idInmueble ='$vId'
and precio.fechaDesde<=CURRENT_DATE
GROUP BY precio.idInmueble"; 
$vResultado = mysql_query($vSql, $link) or die (mysql_error());; 
$fila = mysql_fetch_array($vResultado); 
if(mysql_num_rows($vResultado) == 0) { 
       echo ("La propiedad no existe <br>"); 
       echo ("<A href='modificarPrecio.html'>Continuar</A>"); 
} 
else{ 
?> 

<div id="formModi">
<FORM  action="modiPrecio.php" method="POST" name="FormModi"> 
<table id="tableModi"> 

<thead>
  	<tr>
		<th colspan="2">Modificación de precio</th>
	</tr>
  </thead>
  <tbody>

<tr>  
      <td width="103"> ID: </td> 
      <td width="243"> <input type="text"  name="idInmueble" value="<?php echo($fila['idInmueble']); ?>" readonly>	  </td> 
</tr> 
<tr>  
        <td width="103"> Valor: </td> 
     <td width="243"> <input type="TEXT"  name="valor" size="20" maxlength="20"                                    
     value="<?php echo($fila['precio']); ?>">           </td> 
        </tr> 
        
       <tr>  
      <td colspan="1" align="center"> <input type="SUBMIT"  name="Submit" value="Modificar">     </td> 
	  <td colspan="1" align="left">	<a href="modificarPrecio.html"><input type="button"  name="Submit" value="Cancelar" onclick="modificarPrecio.html"></a>           </td> 
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