<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
		  session_start();
		
		  ?>


<title>Inmobiliaria PM</title>

<link rel="stylesheet" type="text/css" href="header.css"/>

<link rel="stylesheet" type="text/css" href="posicionamientoPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="estiloPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="base.css"/>
<link rel="stylesheet" type="text/css" href="elementos.css"/>

<link rel="stylesheet" type="text/css" href="footer.css"/>
<link rel="stylesheet" type="text/css" href="body.css"/>
<link rel="stylesheet" type="text/css" href="botones.css"/>
<link rel="stylesheet" type="text/css" href="estiloPreguntasFrecuentes.css"/>
<link rel="stylesheet" type="text/css" href="estiloTAW.css"/>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">
//<![CDATA[
$(document).ready(function(){


$('.menujq > ul > li:has(ul)').addClass('desplegable');
$('.menujq > ul > li > a').click(function() {
var comprobar = $(this).next();
$('.menujq li').removeClass('activa');
$(this).closest('li').addClass('activa');
if((comprobar.is('ul')) & (comprobar.is(':visible'))) {
$(this).closest('li').removeClass('activa');
comprobar.slideUp('normal');
}
if((comprobar.is('ul')) & (!comprobar.is(':visible'))) {
$('.menujq ul ul:visible').slideUp('normal');
comprobar.slideDown('normal');
}
});


});


//]]>
</script>


</head>



<body>

<h1></h1>

<div id="header">



          <div id="cont_header_h">
            <div id="menu_header_h"> 
			
			<?php		
			  if(!isset($_SESSION['usuario']))
			  { ?>
			<a href="index.php" target="_self" >Inicio</a> 
			<a href="BuenosAires.php" target="_self"  >Buenos Aires</a> 
			<a href="Rosario.php" target="_self" >Rosario</a> 
			<a href="Cordoba.php" target="_self" >C�rdoba</a> 
			<a href="#" target="_self" >Preguntas Frecuentes</a> 
			<a href="Login.html" target="_self" >Login</a> 
			<a href="Registro.html" target="_self" >Reg�strese</a>
		<?php	} else {
		?>
			<a href="principalUsuario.php" target="_self" >Inicio</a> 
			<a href="BuenosAiresLogueado.php" target="_self"  >Buenos Aires</a> 
			<a href="RosarioLogueado.php" target="_self" >Rosario</a> 
			<a href="CordobaLogueado.php" target="_self" >C�rdoba</a> 
			<a href="#" target="_self" >Preguntas Frecuentes</a> 
			<a href="Contacto.php" target="_self"  >Contacto</a> 
			<a href="Newsletter.php" target="_self">Newsletter</a>
			<?php } ?>
			
			</div>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		  
		   <div id="nombre_sesion">
		  <?php if(isset($_SESSION['usuario']))
		  {
		echo "Bienvenido: ".$_SESSION['usuario'];
		  ?> <br />
		  <a class="link_salir" name="s" href="salir.php">[Salir]</a>
		  <?php } ?> </div>
		  
		  <?php if(isset($_SESSION['usuario']))
		  { ?>
		  <a href="principalUsuario.php"><img class="logo" src="imagen/logo.jpg" alt="Imagen logo" title="Logo" /></a>
		  <?php } else { ?>
           <a href="index.php"><img class="logo" src="imagen/logo.jpg" alt="Imagen logo" title="Logo" /></a>
		   <?php } ?>


   

</div><!-- #header -->
	
<div id="contenido">

<div class="menujq">
<ul>

 <li><a href="javascript:void();">�Qu� condiciones se necesitan para alquilar un inmueble?</a>
  <ul>
   <li><p>Condiciones generales:<br />
   		  - Se requiere entrevista personal en la Inmobiliaria con previo aviso v�a email<br />
   		  - 1 mes de dep�sito<br />
		  - Ser mayor de 18 a�os<br />	
   	      - Se necesita una garant�a de la provincia donde se alquile el inmueble<br />	
		  - Plazo m�nimo de alquiler es de 1 a�o<br />	
		  - Plazo m�ximo de alquier es de 5 a�os<br />
		  - Presentar documentaci�n y datos personales<br />
   
   	   </p>
   </li>
  </ul>
 </li>
 
 <li><a href="javascript:void();">�Qu� ventajas tienen los usuarios registrados?</a>
  <ul>
   <li><p>
   		  - Pueden ver en l�nea los precios de los inmuebles<br />
   		  - Pueden v�a email consultar sobre la disponibilidad de un inmueble <br />
		  - Acceso al newsletter<br />	
   		</p>
	</li>
  </ul>
 </li>
 
 <li><a href="javascript:void();">�Se puede pagar en cualquier moneda?</a>
  <ul>
   <li><p>No. En moneda de curso legal, por ley de Convertibilidad puede ser en d�lares o en pesos.</p></li>
  </ul>
 </li>
 
 <li><a href="javascript:void();">�El locatario puede dar por terminado el alquiler antes de la finalizaci�n?</a>
  <ul>
   <li><p>
   			- El locatario podr�, pasados los primeros 6 meses de vigencia del contrato, terminar la contrataci�n. <br />								            - Deber� notificar fehacientemente su decisi�n con una antelaci�n m�nima de 60 d�as.<br />
            - Si toma esta opci�n en el transcurso del 1er a�o, deber� abonar al locador un 1 y 1/2 de alquiler.<br />
   
   </p></li>
  </ul>
 </li>
 
 <li><a href="javascript:void();">�Se puede exigir la renovaci�n del contrato?</a>
  <ul>
   <li>
   <p>
   			
   - No, se convendr� entre ambas partes, pero el locador no tiene obligaci�n de aceptar, as� como tampoco podr� desalojar al inquilino por causa alguna antes de los dos a�os o tres seg�n el caso. De decidir hacerlo se formalizara un nuevo contrato con nueva fecha.
   </p></li>
  </ul>
 </li>
 
</ul>
</div><!-- #menujq -->

</div><!-- #contenido -->




  
  


<div id="footer"><div id="footerhijo">Ingenier�a en Sistemas de Informaci�n - Universidad Tecnol�gica Nacional Rosario</div>

	<p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
</p>

</div>


</body>
</html>
