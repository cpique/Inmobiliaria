<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<?php
//Inicio la sesión 
session_start(); 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if(isset($_SESSION['admin'])) //para saber si existe o no ya la variable de sesión que se va a crear cuando el usuario se logee 
{  
   	//si no existe, envio a la página de autentificacion 
   	header("Location: MenuAdmin.php"); 
   	//ademas salgo de este script 
   	}
	else if (isset($_SESSION['usuario']))
	{  
   	//si no existe, envio a la página de autentificacion 
   	header("Location: principalUsuario.php"); 
   	//ademas salgo de este script 
   	}
	else
	{
	header("Location: index.php");
	}
	
	
?>
</head>

<body>

</body>
</html>
