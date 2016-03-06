<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inmuebles Rosario</title>

<link rel="stylesheet" type="text/css" href="header.css"/>
<link rel="stylesheet" type="text/css" href="posicionamientoPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="estiloPrincipal.css"/>
<link rel="stylesheet" type="text/css" href="base.css"/>
<link rel="stylesheet" type="text/css" href="elementos.css"/>

<link rel="stylesheet" type="text/css" href="footer.css"/>
<link rel="stylesheet" type="text/css" href="body.css"/>
<link rel="stylesheet" type="text/css" href="botones.css"/>
<link rel="stylesheet" type="text/css" href="Tablas.css"/>
<link rel="stylesheet" type="text/css" href="estiloTAW.css"/>


</head>

<body>
<h1></h1>

<div id="header">



          <div id="cont_header_h">
            <div id="menu_header_h"> 
			<a href="index.php" target="_self" >Inicio</a> 
			<a href="BuenosAires.php" target="_self"  >Buenos Aires</a> 
			<a href="Rosario.php" target="_self" >Rosario</a> 
			<a href="Cordoba.php" target="_self" >Córdoba</a> 
			<a href="PreguntasFrecuentes.php" target="_self" >Preguntas Frecuentes</a> 
			<!--<a href="Contacto.php" target="_self"  >Contacto</a> -->
			<a href="Login.html" target="_self" >Login</a> 
			<a href="Registro.html" target="_self" >Regístrese</a>
			<!--<a href="MenuAdmin.html" target="_self" >Admin</a>-->
			</div>
            <!--#menu_header-->
          
		  </div><!--#cont_header-->
		  
		  <a href="index.php"><img class="logo" src="imagen/logo.jpg" alt="Imagen Logo" 
				title="Imagen Logo" /></a>


   

</div><!-- #header -->


<div id="contenido">
<?php  
include("conexion.inc"); 

//AL PRINCIPIO COMPRUEBO SI HICIERON CLICK EN ALGUNA PÁGINA 
if(isset($_GET['page']))
{
    $page= $_GET['page'];
}
else
{
	//SI NO DIGO Q ES LA PRIMERA PÁGINA
    $page=1;
}
//ACA SE SELECCIONAN TODOS LOS DATOS DE LA TABLA
$consulta="SELECT ubicacion,descripcionTipo,nombreLocalidad,imagen,precio FROM inmuebles INNER JOIN localidad ON 
inmuebles.localidad=localidad.idLocalidad INNER JOIN tipo ON
inmuebles.tipo=tipo.idTipo INNER JOIN precio ON
inmuebles.id=precio.idInmueble
WHERE localidad.nombreLocalidad='Rosario'
AND precio.fechaDesde<=CURRENT_DATE
GROUP BY inmuebles.id";
$datos=mysql_query($consulta,$link);
 
//MIRO CUANTOS DATOS FUERON DEVUELTOS
$num_rows=mysql_num_rows($datos);


//ACA SE DECIDE CUANTOS RESULTADOS MOSTRAR POR PÁGINA , EN EL EJEMPLO PONGO 15
$rows_per_page= 2;
//CALCULO LA ULTIMA PÁGINA
$lastpage= ceil($num_rows / $rows_per_page);
 
//COMPRUEBO QUE EL VALOR DE LA PÁGINA SEA CORRECTO Y SI ES LA ULTIMA PÁGINA
$page=(int)$page;

if($page > $lastpage)
{
    $page= $lastpage;
}

if($page < 1)
{
    $page=1;
}
 
//CREO LA SENTENCIA LIMIT PARA AÑADIR A LA CONSULTA QUE DEFINITIVA
$limit= 'LIMIT '. ($page -1) * $rows_per_page . ',' .$rows_per_page;
//REALIZO LA CONSULTA QUE VA A MOSTRAR LOS DATOS (ES LA ANTERIO + EL $limit)
$consulta .=" $limit";
$resultado=mysql_query($consulta,$link);
if(!$resultado)
{
        //SI FALLA LA CONSULTA MUESTRO ERROR
        die('Invalid query: ' . mysql_error());
}
else
{
      //SI ES CORRECTA MUESTRO LOS DATOS 
      ?> <table border="1">
      		<thead>
	      		<tr><th>Ubicacion</th><th>Tipo</th><th> Localidad</th><th>Imagen</th></tr>
	      	</thead>
	      	<tbody>
    <?php while($row = mysql_fetch_assoc($resultado))
    	  {  ?>
        
        	<tr>
			<td><?php echo $row['ubicacion']; ?> </td>
			<td> <?php echo $row['descripcionTipo']; ?> </td>
			<td> <?php echo $row['nombreLocalidad']; ?> </td>
			<td><img src="imagen/<?php echo ($row['imagen']); ?>" width="150" height="150" alt="Imagen propiedad Rosario" 
				title="Imagen propiedad Rosario" />
			</td>
			
			</tr>
   <?php  } ?>
      		</tbody>
      	</table>
<?php
	//UNA VEZ Q MUESTRO LOS DATOS TENGO Q MOSTRAR EL BLOQUE DE PAGINACIÓN SIEMPRE Y CUANDO HAYA MÁS DE UNA PÁGINA
	 
	if($num_rows != 0)
	{
	   $nextpage= $page +1;
	   $prevpage= $page -1;
	
	   ?><ul id="pagination-digg"><?php
		   //SI ES LA PRIMERA PÁGINA DESHABILITO EL BOTON DE PREVIOUS, MUESTRO EL 1 COMO ACTIVO Y MUESTRO EL RESTO DE PÁGINAS
		   if ($page == 1) 
		   {
		 	?>
		      <li class="previous-off">&laquo; Anterior</li>
		      <li class="active">1</li> 
		 <?php
			  for($i= $page+1; $i<= $lastpage ; $i++)
			  {?>
			  	<li><a href="Rosario.php?page=<?php echo $i;?>"><?php echo $i;?></a></li>
		<?php }
	      
	       //Y SI LA ULTIMA PÁGINA ES MAYOR QUE LA ACTUAL MUESTRO EL BOTON NEXT O LO DESHABILITO
			if($lastpage >$page )
			{?>		
		    	<li class="next"><a href="Rosario.php?page=<?php echo $nextpage;?>" >Siguiente &raquo;</a></li><?php
			}
			else
			{?>
				<li class="next-off">Siguiente &raquo;</li>
		<?php
			}
		} 
		else 
		{
	
			//EN CAMBIO SI NO ESTAMOS EN LA PÁGINA UNO HABILITO EL BOTON DE PREVIUS Y MUESTRO LAS DEMÁS
		?>
		 	<li class="previous"><a href="Rosario.php?page=<?php echo $prevpage;?>">&laquo; Anterior</a></li><?php
			 for($i= 1; $i<= $lastpage ; $i++)
			 {
	                       //COMPRUEBO SI ES LA PÁGINA ACTIVA O NO
		  		if($page == $i)
		  		{
			?>		<li class="active"><?php echo $i;?></li><?php
				}
				else
				{
			?>		<li><a href="Rosario.php?page=<?php echo $i;?>" ><?php echo $i;?></a></li><?php
				}
			}
	         //Y SI NO ES LA ÚLTIMA PÁGINA ACTIVO EL BOTON NEXT		
	        if($lastpage >$page )
	        {	?>	
	        	<li class="next"><a href="Rosario.php?page=<?php echo $nextpage;?>">Siguiente &raquo;</a></li><?php
		    }
		    else
		    {
		?> 		<li class="next-off">Siguiente &raquo;</li><?php
		  	}
		}	  
	?></ul></div><?php
	} 
}

?>




<div id="footer"><div id="footerhijo">Ingeniería en Sistemas de Información - Universidad Tecnológica Nacional Rosario</div>

	<p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
    </p>

</div>

</body>
</html>
