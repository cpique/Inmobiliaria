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

<div id="contenido" class="menuModif">
<?php 
include ("conexion.inc"); 
//Captura datos desde el Form anterior 
$vUsuario = $_POST['usuario']; 
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
<FORM  action="Modi.php" method="POST" name="FormModi" id="form-modi"> 
<table id="tableModiPHP"> 
<thead>
  	<tr>
		<th colspan="2">Modificación de usuario</th>
	</tr>
  </thead>
  <tbody>
<tr>  
      <td width="103"> Nombre: </td> 
      <td width="243"> <input type="text"  name="nombre" value="<?php echo($fila['nombre']); ?>">	  </td> 
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
  <td>Tipo:</td>
  <td><!--<input type="TEXT"  name="tipo" size="20" maxlength="40"                      
       value=""> -->      
	   <?php if( $fila['tipo'] == "usu"){ ?>
	   <select name="tipo" id="tipo"> 
				<option value="usu" selected="selected">Usuario</option> 
				<option value="admin">Administrador</option> 
				</select>
				  <?php } ?>
	   			
	   <?php if( $fila['tipo'] == "admin"){ ?>
	   <select name="tipo" id="tipo"> 
				<option value="usu" >Usuario</option> 
				<option value="admin" selected="selected">Administrador</option> 
				</select>
				  <?php } ?>
	   
	          </td>
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