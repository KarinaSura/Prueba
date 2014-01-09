<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Busqueda</title>
		<script src="js/jquery.functions.js" type="text/javascript"></script>
		<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<!--  Free CSS Template | Designed by TemplateMo.com  -->
<link href="iconos/Favicon.ico" type="image/x-icon" rel="shortcut icon" />

<!-- Include the jQuery library (local or CDN) -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<!-- Include the plugin *after* the jQuery library -->
<script src="bjqs.min.js"></script>
<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<link type="text/css" rel="Stylesheet" href="bjqs.css" />
	</head>
	<body>
		<div id="templatemo_container">

      
        <div id="templatemo_shopping_cart">
              
        </div>
        <div id="banner-fade">

        <!-- start Basic Jquery Slider -->
        <ul class="bjqs">
    
          <li><img src="img/Untitled-1.fw.png" title="Automatically generated caption"></li>
          <li><img src="img/biblio_virtual.fw.png" title="Automatically generated caption"></li>
          <li><img src="img/biblio.fw.png" title="Automatically generated caption"></li>
     
        </ul>
        <!-- end Basic jQuery Slider -->

      </div>
      <!-- End outer wrapper -->
    
<!-- Banner slider -->
      <script class="secret-source">
        jQuery(document).ready(function($) {

          $('#banner-fade').bjqs({
            height      : 250,
            width       : 990,
            responsive  : true
          });

        });
      </script>
     
     
   
   <!-- menu -->
     
<div id="templatemo_menu_panel">
        <ul>
            
            <li><a href="index.php" target="_parent">INICIO</a></li>
            <li><a href="nosotros.php" target="_parent">NOSOTROS</a></li>
            <li><a href="galeria.php" target="_parent">GALERIA</a></li>  
            <li><a href="login.php">LOGIN</a></li> 
            <li><a href="contactanos.php">CONTACTANOS</a></li>                     
        </ul> 
    </div> <!-- end of menu -->
    
    <div id="templatemo_content">
    		<center><h3>RESULTADOS DE BUSQUEDA</h3></center> 

										<?php
						


if(isset($_REQUEST['variable'])){
					$dato=$_REQUEST['dato'];		
       define('DB_SERVER1','localhost'); 
define('DB_NAME1','biblioteca'); //nombre de la bd
define('DB_USER1','root'); 
define('DB_PASS1',''); 

$sql1="SELECT codigo_libro,titulo_libro,autor,edicion,genero,ubicacion,lugar_edicion,editorial,año,cant_paginas,ISBN_ISSN,nivel,idioma,descriptor,cant_ejemplares
FROM libros
WHERE titulo_libro = '$dato' or autor='$dato'or genero='$dato'";
$con1 = mysql_connect(DB_SERVER1,DB_USER1,DB_PASS1); 
mysql_select_db(DB_NAME1,$con1); 
    $res1=  mysql_query($sql1,$con1);
    echo '<center>';
    echo "Datos generales &nbsp;";
            echo '<table cellpadding="0" cellspacing="0" width="100%">';
    echo '<thead><tr><td>Codigo</td><td>Titulo</td><td>Autor</td><td>Edicion</td><a href="index.php">&nbsp;&nbsp;Siguiente busqueda--></a> <td>Genero</td><td>&nbsp;&nbsp;</td><td>&nbsp;&nbsp;</td></tr></thead>';
    
	
 
    
        while ($row = mysql_fetch_array($res1)) {
	 print ' <tr>';
	    print '<td align"center">'.$row["codigo_libro"].'</td>';
        print '<td align"center">'.$row["titulo_libro"].'</td>';
      
        print '<td align"center">'.$row["autor"].'</td>';
		 print '<td align"center">'.$row["genero"].'</td>';
     
print'<form action="" method="POST">';
        echo "<input type='hidden' name='codigo' value=" . $row['codigo_libro'] . "></input>";
          echo "<input type='hidden' name='titulo' value=" . $row['titulo_libro'] . "></input>";
		    echo "<input type='hidden' name='autor' value=" . $row['autor'] . "></input>";
			  echo "<input type='hidden' name='genero' value=" . $row['genero'] . "></input>";
			    echo "<input type='hidden' name='editorial' value=" . $row['editorial'] . "></input>";
				
					
					?>
					<td>
<input type="date" name="fecha_salida" id="fecha_salida" value="dd-mm-yyyy" class="required" maxlength="12" pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d" required  /> 

</td>
<td>
<input type="date" name="fecha_devolucion" id="fecha_devolucion" value="dd-mm-yyyy" class="required" maxlength="12" pattern="(0[1-9]|[12][0-9]|3[01])[- /.](0[1-9]|1[012])[- /.](19|20)\d\d" required  /> 

</td>
					
					<?php
        print '<td align="center"><input type="submit" name="agregar" value="Agregar"/></td>';
        
  
  print "</form>";

       
print ' </tr>';
}

        print "</table>";
         echo '</center>';
        mysql_free_result($res1);
        mysql_close($con1);
    }
	
	
	
	
	
	
	
?>
									<?php
//agregamos al carro

if(isset($_REQUEST['agregar'])){
require('clases/nota.php');
					$codigo=$_REQUEST['codigo'];
                    $titulo=$_REQUEST['titulo'];
                    $autor=$_REQUEST['autor'];
					$editorial=$_REQUEST['editorial'];
                    $genero=$_REQUEST['genero'];
					$fechasalida=$_REQUEST['fecha_salida'];
					$fechadevolucion=$_REQUEST['fecha_devolucion'];
				//hasta aqui tomo las variables de la tabla libro
					$numero_comprobante=123456;
						$objCliente=new Cliente;
	if ( $objCliente->insertar(array($codigo,$titulo,$autor,$editorial,$genero,$fechasalida,$fechadevolucion, $numero_comprobante)) == true){

		print "<script>alert (\"Pedido agregado con exito\");</script>";
						$objCliente=new Cliente;
	//if ( $objCliente->insertar1(array($codigo,$titulo,$autor,$editorial,$genero,$fechasalida,$fechadevolucion, $numero_comprobante)) == true){
	//print "<script>alert (\"Ya lo agrego  con exito ala 2\");</script>";	
       define('DB_SERVER2','localhost'); 
define('DB_NAME2','biblioteca'); //nombre de la bd
define('DB_USER2','root'); 
define('DB_PASS2',''); 

$sql2="SELECT codigo_libro,nombre_libro,nombre_autor,nombre_editorial,nombre_genero
FROM detalle";
$con2 = mysql_connect(DB_SERVER2,DB_USER2,DB_PASS2); 
mysql_select_db(DB_NAME2,$con2); 
    $res2=  mysql_query($sql2,$con2);
    echo '<center>';
    echo "Datos generales";
            echo '<table cellpadding="0" cellspacing="0" width="100%">';
    echo '<thead><tr><td>codigo</td><td>titulo</td><td>autor</td><td>genero</td><td></td></tr></thead>';
    
    
        while ($row = mysql_fetch_array($res2)) {
	 print ' <tr>';
	    print '<td align"center">'.$row["codigo_libro"].'</td>';
        print '<td align"center">'.$row["nombre_libro"].'</td>';
      
        print '<td align"center">'.$row["nombre_autor"].'</td>';
		print '<td align"center">'.$row["nombre_editorial"].'</td>';
		
	
		
     
?>
<td><a onClick="EliminarDato(<?php echo $row['codigo_libro']  ?>); return false" href="eliminar.php?id=<?php echo $row['codigo_libro']?>"><input type="button" value="Eliminar" /></a></td>


	

<?php
       
print ' </tr>';
}

        print "</table>";
         echo '</center>';
        mysql_free_result($res2);
        mysql_close($con2);
    //}
	}else{
	
	print "<script>alert (\"Error\");</script>";
	}
	
	
	
}else{
     define('DB_SERVER3','localhost'); 
define('DB_NAME3','biblioteca'); //nombre de la bd
define('DB_USER3','root'); 
define('DB_PASS3',''); 

$sql3="SELECT codigo_libro,nombre_libro,nombre_autor,nombre_editorial,nombre_genero, fechasalida, fechadevolucion,numero_comprobante
FROM detalle";
$con3= mysql_connect(DB_SERVER3,DB_USER3,DB_PASS3); 
mysql_select_db(DB_NAME3,$con3); 
    $res3=  mysql_query($sql3,$con3);
    echo '<center>';
    echo "Datos generales";
            echo '<table cellpadding="0" cellspacing="0" width="100%">';
    echo '<thead><tr><td>codigo</td><td>titulo</td><td>autor</td><td>genero</td><td><a href="index.php">Agregar</a></td></tr></thead>';
    
    
        while ($row = mysql_fetch_array($res3)) {
          print '<div id="muestra">';//para seleccionar área de impresion por medio de un div y su ID
	 print ' <tr>';
	    print '<td align"center">'.$row["codigo_libro"].'</td>';
        print '<td align"center">'.$row["nombre_libro"].'</td>';
      
        print '<td align"center">'.$row["nombre_autor"].'</td>';
		print '<td align"center">'.$row["nombre_editorial"].'</td>';

    print '</div>';//fin del área seleccionada
		
     
?>
<td><a onClick="EliminarDato(<?php echo $row['codigo_libro']  ?>); return false" href="eliminar.php?id=<?php echo $row['codigo_libro']?>"><input type="button" value="Eliminar" /></a></td>
	

<?php
       
print ' </tr>';
}

        print "</table>";
         echo '</center>';
        mysql_free_result($res3);
        mysql_close($con3);
}	
?>

<script type="text/javascript">// SCRIPT para mandar a imprimir de forma delimitada
function imprSelec(muestra)
{var ficha=document.getElementById(muestra);var ventimp=window.open(' ','popimpr');ventimp.document.write(ficha.innerHTML);ventimp.document.close();ventimp.print();ventimp.close();}
</script>
<center>
<a href="javascript:imprSelec('muestra')">Imprimir</a>

<!--<center><input type="button" value="Imprimir" onclick="javascript:window.print()" />--><!-- imprimir ventana-->
<input type="button" name="fin" value="FINALIZAR" onClick=" window.location.href='index.php' ">
<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p> <center>

<?php
if(isset($_REQUEST['insertar']))
{
   $link=mysql_connect("localhost","root","");
   msyql_select_db("biblioteca");
   $result=mysql_query("TRUCATE detalle");
   }
?>


</center>

<div class="cleaner">&nbsp;</div>
    </div>
    
     <div id="templatemo_footer_panel">
        <div id="footer_left">
         
        </div>
        <div id="footer_right">
            Copyright © ESMA <a href="#"></a><br />
      
        </div>
        
        <div class="cleaner">&nbsp;</div>
    </div>
</div>
<!--  Free CSS Template | Designed by TemplateMo.com  --> 
</a></div>
	</body>
</html>