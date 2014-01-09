<?php
       require_once("mantenimiento.php");
       $clase = new mmto();
       include("conexion.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">

   <?php
   include("head.php");
   ?>
<script language="JavaScript" type="text/javascript"> 
function Confirmar(frm) 
{ 
var borrar = confirm("Esta seguro/a de que quiere eliminar estos registros?"); 
return borrar; //true o false 
} 
</script>


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
            <h1>Ingreso de nueva Categoria</h1>
            </br>
            </br>
            
<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="formulario.css">
<form action="categoria.php" method="post">
<fieldset id="form">

<ol>
    </br>
    </br>
    </br>
    </br>
     
    <li><label> Nueva categoria: </label><input type="text" name="nombre" size="25" style="background:#F3FCFF"/></li>
    </br>
    </br>
</ul>
<input type="submit"  src="iconos/boton_guardar.fw.png" name="insertar" value="Insertar"/>
</fieldset>
</form>
</br>
</br>
</br>

     <?php
if(isset($_REQUEST['insertar']))
{
$nombre_genero=$_REQUEST['nombre'];
 $buscar = mysql_query("SELECT * FROM genero WHERE nombre_genero = '".$_POST["nombre"]."'");

if(mysql_num_rows($buscar)>0){
       echo "<div class='error mensajes'>Ya existe esa categoria</div>";
}

else{
     $SQL= "insert into genero values(\"$nombre_genero \")";
$clase->insertar($SQL);

if($SQL) {
echo "<div class='exito mensajes'>Categoria agregada</div>";
}
}
 }
?>
</br>
</br>
                        </br>
</br>
    <a href="#" id="mostrar1">Modificar</a>
<div id="caja1">

            <?php             
 $gene = "SELECT * FROM genero";
$resu = mysql_query($gene);
echo "<form id='act' name='act' method='POST' action=''> ";
echo "<select name='genero' id='est' onchange='txt(this.id)'>";
while ($row = mysql_fetch_array($resu)) {
$identif=$row['nombre_genero'];
    echo "<option value='" . $row['nombre_genero'] . "'>" . $row['nombre_genero'] . "</option>";
}
      echo "<input type='hidden' id='generos' name='generos' value='$identif'>";
echo "</form>";
?>

    <fieldset  id="formm" style="display:none" >
<ol>
  <form  ="categoria.php" method="post" autocomplete="off">
  <input type="hidden" id="identi" name="identi" size="25"/>
  <li><label>Nombre genero: </label><input type="text" id="otr" name="otr" style="display:none" /></li>
  </ol>     <input type="submit" id="actu" name="actualizar"  style="display:none"  value="Actualizar" />
  </fieldset>
  </form>

     <?php
            if(isset($_REQUEST['actualizar']))
       {
        echo "<script language='JavaScript'>
            alert('La actualizacion se ha realizado correctamente');
            window.location.href='categoria.php';
            </script>";

        $identi=$_POST["identi"];
      if (isset($_POST["otr"]))
      {
  $lb=$_POST["otr"];
  $que1e="UPDATE genero SET nombre_genero='$lb' WHERE nombre_genero='$identi'";
           mysql_query($que1e); 
      }
   
         echo "<meta HTTP-EQUIV='refresh' CONTENT='1'; URL=categoria.php>";
echo "<script language='JavaScript'>alert('Modificacion exitosa');</script>";
            }
        ?>
              </div> 
                        </br>
</br>

     <a href="#" id="mostrar">Eliminar</a>
<div id="caja">

       <?php 
$gene = "SELECT * FROM genero";
$resu = mysql_query($gene);

echo "<form id='act' name='act' method='POST' action='categoria.php'> ";
echo "<select name='genero'>";
while ($row = mysql_fetch_array($resu)) {
    echo "<option value='" . $row['nombre_genero'] . "'>" . $row['nombre_genero'] . "</option>";
}
echo "</select><input type='submit' name='borrar' onClick='return Confirmar(this.form)' value='Borrar'>";
//echo "<input type='button' name='listar' value='listar' onclick='location='buscar.php''/>";
echo "</form>";

          if(isset($_REQUEST['borrar']))
{             $var=$_POST['genero'];
       $sql=("DELETE FROM genero where nombre_genero='$var'");
mysql_query($sql);
echo "<meta HTTP-EQUIV='refresh' CONTENT='1'; URL=categoria.php>";
}
?>
     </div>
                 <div id="content_bottom"></div>
   </div>   </div>   </div>

       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>
      <h4 style="margin-left: 46%;margin-top:5px;color:#EBEBEB;"> Copyright © ESMA       </h4>
       </div>
</body>
</html>