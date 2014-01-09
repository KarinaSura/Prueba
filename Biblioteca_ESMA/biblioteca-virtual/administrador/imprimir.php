 <?php
include("conexion.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Sans Titre</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="generator" content="HAPedit 3.1">

 <script type="text/javascript">

function imprSelec(impre)
{
var ficha=document.getElementById(impre);
var ventimp=window.open(' ','popimpr');
ventimp.document.write(ficha.innerHTML);
ventimp.document.close();ventimp.print();ventimp.close();
}






</script>               


<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="formulario.css">
    <link rel="stylesheet" type="text/css" href="style.css" />

<style type="text/css"> 


body { 

background: white !important;
} 
</style>
</head>
<body bgcolor="#FFFFFF">
<?php



        $busq=$_GET['id'];


       $consulta_mysql="select * from libros  WHERE codigo_libro= '$busq'";
 
       $resultado_consulta_mysql= mysql_query($consulta_mysql);



while($registro=mysql_fetch_array($resultado_consulta_mysql)){

$cod=$registro["titulo_libro"] ;
$isb=$registro["ISBN_ISSN"]   ;
echo "     <div id='impre'><table border = '1'> ";
   echo "</br></br><thead><tr><th>Codigo</th><th>Titulo</th><th>Autor</th> <th>Edicion</th><th>Genero</th><th>Ubicacion</th><th>Lugar Edicion</th>
 <th>Editorial</th><th>Año</th><th>Can. Paginas</th><th>Descriptor</th>
 <th>Cant. Ejemplares</th></tr></thead> ";

      echo "<tr><td>"
      .$registro["codigo_libro"]."</td><td>"
      .$registro["titulo_libro"]."</td><td>"
      .$registro["autor"]."</td><td>"
      .$registro["edicion"]."</td><td>"
.$registro["genero"]."</td><td>"
.$registro["ubicacion"]."</td><td>"
.$registro["lugar_edicion"]."</td><td>"
.$registro["editorial"]."</td><td>"
.$registro["año"]."</td><td>"
.$registro["cant_paginas"]."</td><td>"

.$registro["descriptor"]."</td><td>"
.$registro["cant_ejemplares"];

       }

   echo "</table></div>";







?>

<a class="btn" href="javascript:imprSelec('impre')">Imprimir </a>



</body>


</html>