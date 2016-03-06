<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php
		  session_start();
		  if(!isset($_SESSION['usuario']))
		 { header("Location: index.php");}
		  ?>


<title>Actualizar Datos</title>

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
$vUsuario = $_SESSION['usuario']; 
//Arma la instrucción SQL y luego la ejecuta 
$vSql = "SELECT * FROM usuarios WHERE usuario ='$vUsuario' "; 
$vResultado = mysql_query($vSql, $link) or die (mysql_error());; 
$fila = mysql_fetch_array($vResultado); 
if(mysql_num_rows($vResultado) == 0) { 
       echo ("El usuario no existe <br>"); 
       echo ("<A href='FormModiIni.html'>Continuar</A>"); 
} 
else{ 
?> 


<div id="formModiPHP">
<FORM  action="ActualizarDatos2.php" method="POST" name="actualizarDatos" id="actualizarDatos"> 
<table id="tableModiPHP"> 
<thead>
  	<tr>
		<th colspan="2">Modificación de usuario</th>
	</tr>
  </thead>
  <tbody>
<tr>  
      <td width="103"> Nombre: </td> 
      <td width="243"> <input type="TEXT"  name="nombre" size="20" maxlength="20" value="<?php echo($fila['nombre']); ?>">	  </td> 
</tr> 
<tr>  
        <td width="103"> Apellido: </td> 
     <td width="243"> <input type="TEXT"  name="apellido" size="20" maxlength="20"                                    
     value="<?php echo($fila['apellido']); ?>">           </td> 
        </tr> 
        <tr>  
             <td width="103"> DNI </td> 
             <td width="243"> <input type="TEXT"  name="dni" size="20" maxlength="20"        
              value="<?php echo($fila['dni']); ?>">             </td> 
</tr> 
<tr>  
      <td width="103"> Email: </td> 
           <td width="243"> <input type="TEXT"  name="email" size="20" maxlength="40"                      
       value="<?php echo($fila['email']); ?>">              </td> 
        </tr>
<!--<tr>
  <td>Provincia:</td>
  <td><input type="TEXT"  name="provincia" size="20" maxlength="40"                      
       value="<?php echo($fila['provincia']); ?>">              </td>
</tr>-->
<tr>
  <td>Localidad:</td>
  <td><input type="TEXT"  name="localidad" size="20" maxlength="40"                      
       value="<?php echo($fila['localidad']); ?>">            
	   	   </td>
</tr>

<tr>
  <td>Usuario:</td>
  <td><input type="TEXT"  name="usuario" size="20" maxlength="40"                      
       value="<?php echo($fila['usuario']); ?>" readonly="">              </td>
</tr>

       <tr>  
      <td colspan="1" align="center"> <input type="SUBMIT"  name="Submit" value="Modificar">     </td> 
	  <td colspan="1" align="left">	<a href="FormModiIni.html"><input type="button"  name="Submit" value="Cancelar" onclick="FormModiIni.html"></a>           </td> 
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
</div><!--formModiPHP-->
</div><!--contenido-->


<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>