<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
		  session_start();
		  if(!isset($_SESSION['usuario']))
		 { header("Location: index.php");}
		  ?>


<title>Contáctese con nosotros</title>

<link rel="stylesheet" type="text/css" href="header.css"/>
<link rel="stylesheet" type="text/css" href="posicionamientoPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="estiloPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="base.css"/>
<link rel="stylesheet" type="text/css" href="elementos.css"/>
<link rel="stylesheet" type="text/css" href="contacto.css"/>
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
			<a href="Contacto.php" target="_self"  >Contacto</a>  </div>
			<a href="Newsletter.php" target="_self">Newsletter</a>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		  
		  <div id="nombre_sesion">
		  <?php
		  
		echo "Bienvenido: ".$_SESSION['usuario'];
		  ?>
		  <br />
		  <a class="link_salir" name="s"  href="salir.php">[Salir]</a> 
		  </div>
		  
		  <a href="principalUsuario.php"><img class="logo" src="imagen/logo.jpg" /></a>


   

</div><!-- #header -->




<?php
    if(isset($_POST['boton'])){
        if($_POST['nombre'] == ''){
            $errors[1] = '<span class="error">Ingrese su nombre</span>';
        }else if($_POST['email'] == '' or !preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/",$_POST['email'])){
            $errors[2] = '<span class="error">Ingrese un email correcto</span>';
        }else if($_POST['asunto'] == ''){
            $errors[3] = '<span class="error">Ingrese un asunto</span>';
        }else if($_POST['mensaje'] == ''){
            $errors[4] = '<span class="error">Ingrese un mensaje</span>';
        }else{
            $dest = "cristian.pique@hotmail.com"; //Email de destino
            $nombre = $_POST['nombre'];
            $email = $_POST['email'];
            $asunto = $_POST['asunto']; //Asunto
            $cuerpo = $_POST['mensaje']; //Cuerpo del mensaje
            //Cabeceras del correo
            $headers = "From: $nombre <$email>\r\n"; //Quien envia?
            $headers .= "X-Mailer: PHP5\n";
            $headers .= 'MIME-Version: 1.0' . "\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
 
            if(mail($dest,$asunto,$cuerpo,$headers)){
                $result = '<div class="result_ok">Email enviado correctamente </div>';
                // si el envio fue exitoso reseteamos lo que el usuario escribio:
                $_POST['nombre'] = '';
                $_POST['email'] = '';
                $_POST['asunto'] = '';
                $_POST['mensaje'] = '';
            }else{
                $result = '<div class="result_fail">Hubo un error al enviar el mensaje </div>';
            }
        }
    }
?>



<div id="contenido"> 

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
<script src='funciones.js'></script>
  

<div id="contacto"></div>

<div id="formContacto">

<form class='contacto' action="" method="post" onsubmit="return confirm('¿Está seguro?');">
            <div><label>Tu Nombre:</label><input name="nombre" type='text' class="nombre" value=''></div>
            <div><label>Tu Email:</label><input name="email" type='text' class="email" value=''></div>
            <div><label>Asunto:</label><input name="asunto" type='text' class="asunto" value=''></div>
            <div><label>Mensaje:</label><textarea name="mensaje" rows='6' class="mensaje"></textarea></div>
            <div><input name="boton" type='submit' value='Envia Mensaje' class="boton"></div>

</form>

</div>

</div>

<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>

