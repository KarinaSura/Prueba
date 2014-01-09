<?php
require_once("mantenimiento.php");
include("conexion.php");
$clase = new mmto();
$gene = "SELECT nombre_genero FROM genero";
$resu = mysql_query($gene);
$ed = "SELECT nombre_editorial FROM editorial";
$resul = mysql_query($ed);
?>

  <html>
  <?php
         include("head.php");
   ?>

  <body>
        <div id="container">
        <div id="header">
        </div>   
        
        <div id="menu">
           <?php
     include("menu.php");
?>

</div>
        <div id="leftmenu_bottom"></div>
        </div>
        <div id="content">
        <div id="content_top"></div>
        <div id="content_main">
            <center><h2>Ingreso de nuevos libros</h2></center>
            </br>
            </br>
      <script src="jquery.js"></script>     
      <script src="validCampoFranz.js"></script>
      <script type="text/javascript">
            $(function(){
                //Validar
                //Para escribir solo letras
                $('#miCampo1').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
                $('#miCampo4').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
                $('#miCampo5').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');
               

                //Para escribir solo numeros    
                $('#miCampo2').validCampoFranz('0123456789');  
                $('#miCampo3').validCampoFranz('0123456789');
                $('#miCampo5').validCampoFranz('0123456789'); 
                $('#miCampo6').validCampoFranz('0123456789'); 
                $('#miCampo7').validCampoFranz('0123456789');       
            });
        </script>             
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="formulario.css">
    <form action="" method="post" autocomplete="off">
    <fieldset id="form">

<ol>
    <li><label> ID Libro: </label><input type="text" id="miCampo6" name="id" size="25" style="background:#F3FCFF"/></li>
    <li><label>Titulo: </label><input type="text" name="titulo" size="25" style="background:#F3FCFF"/></li>
    <li><label>Nombre autor: </label><input type="text" id="miCampo1" name="nombre" size="25" style="background:#F3FCFF"/></li>        
    <li><label>Edici&oacuten: </label><input type="text" name="edicion" size="25" style="background:#F3FCFF"/></li>       
    <li><label>Gen&eacutero: </label>
    <?php
    echo "<select name='genero'>";
    echo "<option>Seleccione una opcion</option>";
    while ($row = mysql_fetch_array($resu)) {
    echo "<option value='" . $row['nombre_genero'] . "'>" . $row['nombre_genero'] . "</option>";
    }
    echo "</select>";
    ?>
    </select>   </li>  
    <li><label>Ubicaci&oacuten: </label><input type="text" name="ubicacion" size="25" style="background:#F3FCFF"/></li>  
    <li><label>Lugar de edici&oacuten: </label><input type="text" name="edicion" size="25" style="background:#F3FCFF"/></li>  
    <li><label>Editorial: </label>

      <?php
   echo "<select name='editorial'>";
   echo "<option>Seleccione una opcion</option>";
   while ($row = mysql_fetch_array($resul)) {
   echo "<option value='" . $row['nombre_editorial'] . "'>" . $row['nombre_editorial'] . "</option>";
  }
   echo "</select>";
    ?>

    <li><label>A&ntildeo: </label><input type="text" id="miCampo3" name="año" size="25" style="background:#F3FCFF"/></li>  
    <li><label>Cant de paginas: </label><input type="text"  name="paginas" size="25" style="background:#F3FCFF"/></li>
    <li><label>ISBN ISSN: </label><input type="text"  name="isbn" size="25" style="background:#F3FCFF"/></li>
    <li><label>Nivel: </label><input type="text" name="nivel" size="25" style="background:#F3FCFF"/></li>
    <li><label>Idioma: </label><input type="text" id="miCampo4" name="idioma" size="25" style="background:#F3FCFF"/></li>
    <li><label>Descriptor: </label><input type="text" name="descrip" size="25" style="background:#F3FCFF"/></li>
    <li><label>Cant Ejemplares: </label><input type="text" name="ejemplares" id="miCampo7" size="25" style="background:#F3FCFF"/></li>
</ul>   
</fieldset>
</br>
</br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="insertar" value="insertar"/>
</form>
</br>
</br>   

<a class="mostrar" href="buscar.php" target="_self"> Modificar y Eliminar Elementos   </a>   </br>
<a class="mostrar" href="./dataTables/index.php" target="_self"> Listar  </a>

<?php
if(isset($_REQUEST['insertar']))
{
$id=$_REQUEST['id'];
$titulo_libro=$_REQUEST['titulo'];
$autor=$_REQUEST['nombre'];
$edicion=$_REQUEST['edicion'];
$genero=$_REQUEST['genero'];
$ubicacion=$_REQUEST['ubicacion'];
$lugar_edicion=$_REQUEST['edicion'];
$editorial=$_REQUEST['editorial'];
$año=$_REQUEST['año'];
$cant_paginas=$_REQUEST['paginas'];
$ISBN_ISSN=$_REQUEST['isbn'];
$nivel=$_REQUEST['nivel'];
$idioma=$_REQUEST['idioma'];
$descriptor=$_REQUEST['descrip'];
$cant_ejemplares=$_REQUEST['ejemplares'];
$SQL= "insert into libros values($id , \"$titulo_libro \", \"$autor\", \"$edicion\", \"$genero\", \"$ubicacion\", \"$lugar_edicion\", \"$editorial\", \"$año\", \"$cant_paginas\", \"$ISBN_ISSN\", \"$nivel\", \"$idioma\", \"$descriptor\", \"$cant_ejemplares\")";
$clase->insertar($SQL);
header("Location:libros.php");
}
?>

<?php
if(isset($_REQUEST['eliminar'])){
$id=$_REQUEST['id'];
$clase->eliminar('libros',codigo_libro,$id);
header("Location:libros.php");
}
?>
        </div>
         <div id="content_bottom"></div>
   </div>
      </div>
       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>
      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright © ESMA       </h4>
      </div>
</body>
</html>