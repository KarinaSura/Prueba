<?php
require ("clsconexion.php");
include ("conexion.php");
?>

<html>

    <?php

         include("head.php");

?>

   <body style= "background: whitesmoke !important;">

<?php

$libros = "SELECT * FROM libros";
$resu = mysql_query($libros);
if ($row = mysql_fetch_array($resu)){ 
   echo "<center><h1 style='font-color:white;text-align:center !important;  margin: 10px !important;'>Libros</h1><table border = '0'> \n";
   echo "<tr>
 <th align=center bgcolor=#5CCAF5>Codigo</th><th align=center bgcolor=#5CCAF5>Titulo</th><th align=center bgcolor=#5CCAF5>Autor</th><th align=center bgcolor=#5CCAF5>Edicion</th><th align=center bgcolor=#5CCAF5>Genero</th><th align=center bgcolor=#5CCAF5>Ubicacion</th><th align=center bgcolor=#5CCAF5>Lugar Edicion</th><th align=center bgcolor=#5CCAF5>Editorial</th>
 <th align=center bgcolor=#5CCAF5>Año</th>
 <th align=center bgcolor=#5CCAF5>Can. Paginas</th>
 <th align=center bgcolor=#5CCAF5>ISBN_ISSN</th>
 <th align=center bgcolor=#5CCAF5>Nivel</th>
 <th align=center bgcolor=#5CCAF5>Idioma</th>
 <th align=center bgcolor=#5CCAF5>Descriptor</th>
 <th align=center bgcolor=#5CCAF5>Cant. Ejemplares</th></tr></center> \n";
   
   
do { 
      echo "<tr><td>".$row["codigo_libro"]
      ."</td><td>".$row["titulo_libro"]
      ."</td><td>".$row["autor"]
      ."</td><td>".$row["edicion"]
      ."</td><td>".$row["genero"]
      ."</td><td>".$row["ubicacion"]
      ."</td><td>".$row["lugar_edicion"]
      ."</td><td>".$row["editorial"]
      ."</td><td>".$row["año"]
      ."</td><td>".$row["cant_paginas"]
      ."</td><td>".$row["ISBN_ISSN"]
      ."</td><td>".$row["nivel"]
      ."</td><td>".$row["idioma"]
      ."</td><td>".$row["descriptor"]
      ."</td><td>".$row["cant_ejemplares"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($resu)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>




<div id="botton">
      <button name="boton" type="button" onclick="location='libros.php'" style=" margin-left: 50%;margin-top: 20px;style=margin-left: 50%;margin-top: 20px;background: #cde5ef;  border: 1px solid;padding: 10px;cursor: pointer;">Regresar</button>
    </div>
</body>
</html>



