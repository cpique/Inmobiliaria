<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />




<title>Login</title>

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
			<a href="index.php" target="_self" >Inicio</a> 
			<a href="BuenosAires.php" target="_self"  >Buenos Aires</a> 
			<a href="#" target="_self" >Rosario</a> 
			<a href="#" target="_self" >C�rdoba</a> 
			<a href="#" target="_self" >Preguntas Frecuentes</a> 
			<a href="Contacto.php" target="_self"  >Contacto</a> 
			<a href="Login.html" target="_self" >Login</a> 
			<a href="Registro.html" target="_self" >Reg�strese</a>
			<a href="MenuAdmin.html" target="_self" >Admin</a>
			</div>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		  
		  <a href="index.php"><img class="logo" src="imagen/logo.jpg" alt="Imagen Logo" title="Imagen Logo" /></a>


   

</div><!-- #header -->


<?php
session_start(); 
include ("conexion.inc"); 

/*caturamos nuestros datos que fueron enviados desde el formulario mediante el metodo POST
**y los almacenamos en variables.*/
$usuario = $_POST["usuario"];   
$contrase�a = $_POST["contrase�a"];

/*Consulta de mysql con la que indicamos que necesitamos que seleccione
**solo los campos que tenga como nombre_administrador el que el formulario
**le ha enviado*/
$result = mysql_query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

//Validamos si el nombre del administrador existe en la base de datos o es correcto
if($row = mysql_fetch_array($result))
{     
//Si el usuario es correcto ahora validamos su contrase�a
 if($row["contrase�a"] == $contrase�a)
 {
  //Creamos sesi�n
 
  //Almacenamos el nombre de usuario en una variable de sesi�n usuario
    
  if($row["tipo"]=="admin")
  {//Redireccionamos a la pagina: index.php
  
  $_SESSION['admin'] = $row["usuario"];  
    
  header("Location:logueo.php"); 
  }
   else
   {
   
  $_SESSION['usuario'] = $row["usuario"]; 
   
   header("Location: logueo.php");
   }
  //echo ("<A href='index2.html' target='_blank'">;
 }
 else
 {
  //En caso que la contrase�a sea incorrecta enviamos un msj y redireccionamos a index.htm
  ?>
   <script type="text/javascript">
    alert("Contrase�a incorrecta");
    location.href = "Login.html";
   </script>
  <?php
            
 }
}
else
{
 //en caso que el nombre de administrador es incorrecto enviamos un msj y redireccionamos a index.htm
?>
 <script type="text/javascript">
  alert("Nombre de usuario es incorrecto");
  location.href = "Login.html";
 </script>
<?php  
        
}

//Mysql_free_result() se usa para liberar la memoria empleada al realizar una consulta
mysql_free_result($result);

/*Mysql_close() se usa para cerrar la conexi�n a la Base de datos y es 
**necesario hacerlo para no sobrecargar al servidor, bueno en el caso de
**programar una aplicaci�n que tendr� muchas visitas ;) .*/
mysql_close();
?>


<div id="footer"><div id="footerhijo">Ingenier�a en Sistemas de Informaci�n - Universidad Tecnol�gica Nacional Rosario</div></div>

</body>
</html>
