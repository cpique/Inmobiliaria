<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<?php
		  session_start();
		  if(!isset($_SESSION['usuario']))
		 { header("Location: index.php");}
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

<style type="text/css">
#bljaIMGte{float:left;position:relative;}
#bljaIMGte .bljaIMGtex {width:320px;position:absolute;top:10px;left:14px;}
</style>


<style type="text/css">
#bljaIMGte2{float:left;position:relative;}
#bljaIMGte2 .bljaIMGtex {width:320px;position:absolute;top:10px;left:14px;}
</style>

<style type="text/css">
#bljaIMGte3{float:left;position:relative;}
#bljaIMGte3 .bljaIMGtex {width:320px;position:absolute;top:10px;left:14px;}
</style>

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
	





  
  
  <div id="mision">
  
  <p> 
Nuestra misión es la de brindar servicios inmobiliarios profesionales, con el mayor compromiso, ética y la más absoluta confianza, interpretando en todos los casos, las motivaciones que llevan a nuestros clientes a realizar una operación inmobiliaria. 
Deseamos acompañarlos durante todo el proceso de la transacción, hasta el final de la misma, a los efectos que cuenten con la contención y el asesoramiento necesario para sentir que realizaron la mejor operación. Esa será nuestra mayor recompensa. </p>
  
  </div>
  
  <div id="horarios">
  
 
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <thead>
						<tr>
							<th colspan="2">Dirección: Entre Ríos 1814</th>
						</tr>
					  </thead>
					  <tbody>

					<tr>
					  <td align="right">Teléfono: </td>
					  <td align="left"> 3415786523</td>
					  </tr>
					 

					
					<tr> 
					<td width="100" align="center"><b>Lunes a Viernes</b></td> 
					<td width="100" align="center"><b>08:00hs - 12:00hs</b></td> 
					</tr>
					<tr>
					<td width="100" align="center"><b></b></td> 
					<td width="100" align="center"><b>14:00hs - 18:00hs</b></td> 
					</tr> 
					
					
					<tr>
					<td width="100" align="center"><b>Sábados</b></td> 
					<td width="100" align="center"><b>08:00hs - 12:00hs</b></td> 
					</tr>
					</tbody>
    </table>
  
  </div>
  <br></br>
  <br></br>
  <br></br>
  
  
  <div id="contenido">
<!-- BEGIN: CONTENT -->

		<div id="ja-contentwrap">

		<div id="ja-content">

		<table class="blog" cellpadding="0" cellspacing="0">
<tr>
	<td valign="top">
					<div>
		
<div class="contentpaneopen">





<div class="article-content">
<table style="width: 942px;" align="center" border="0" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<td colspan="3" height="365" valign="top"><img src="imagen/principal.jpg" height="360" width="942" alt="Imagen principal" title="Imagen principal" /></td>
</tr>
<tr>
	<td align="left" width="314">
		<div id="bljaIMGte">
		<a href="casas.php"><img onmouseover="this.src='imagen/casas.jpg';" onmouseout="this.src='imagen/casas.jpg';"
 		src="imagen/casas.jpg" height="152" width="314" alt="Imagen casas" title="Imagen casas"/></a>
		
		<div class="bljaIMGtex" style="color:#000000;">
			<p class="textoImagen">CASAS</p>
		</div>
		</div>	
	</td>
	
	<td align="center" width="314">
		<div id="bljaIMGte2">
		<a href="departamentos.php"><img onmouseover="this.src='imagen/deptos.jpg';" onmouseout="this.src='imagen/deptos.jpg';"
 		src="imagen/deptos.jpg" height="152" width="314" alt="Imagen departamentos" title="Imagen departamentos" /></a>
		
		<div class="bljaIMGtex" style="color:#000000;">
			<p class="textoImagen">DEPARTAMENTOS</p>
		</div>
		</div>	
	</td>
	
	<td align="right" width="314">
		<div id="bljaIMGte3">
		<a href="terrenos.php"><img onmouseover="this.src='imagen/terrenos.jpg';" onmouseout="this.src='imagen/terrenos.jpg';"
 	           src="imagen/terrenos.jpg" height="152" width="314" alt="Imagen terrenos" title="Imagen terrenos" /></a>
		
		<div class="bljaIMGtex" style="color:#000000;">
			<p class="textoImagen">TERRENOS</p>
		</div>
		</div>	
	</td>
</tr>
</tbody>
</table></div>



</div>

<span class="article_separator">&nbsp;</span>
		</div>
		</td>
</tr>


</table>




			


		</div>

		</div>

		<!-- END: CONTENT -->
 
    </div>

  


<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div></div>


</body>
</html>
