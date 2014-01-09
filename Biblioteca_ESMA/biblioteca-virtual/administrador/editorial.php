<?php
       require_once("mantenimiento.php");
$clase = new mmto();
         include("conexion.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>

<script src="jquery.js"></script>  
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Sistema Bibliotecario ESMA</title>
</head>
    <script language="JavaScript" type="text/javascript"> 
<!-- 
function Confirmar(frm) 
{ 
var borrar = confirm("Esta seguro/a de que quiere eliminar estos registros?"); 
return borrar; //true o false 
} 
//-->
function txt(){
document.getElementById('formm').style.display = "block";
var valor = document.getElementById('est').value;
document.getElementById('otr').style.display = "block";
var valorid = document.getElementById('identi').value;
document.getElementById('actu').style.display = "block";
document.getElementById('otr').value=valor;
document.getElementById('identi').value=valor;
}

 $(function(){
  $("#mostrar").click(function(event) {
  event.preventDefault();
  $("#caja").slideToggle();
});
$("#caja a").click(function(event) {
  event.preventDefault();
  $("#caja").slideUp();
});
});
 
 $(function(){
  $("#mostrar1").click(function(event) {
  event.preventDefault();
  $("#caja1").slideToggle();
});
$("#caja1 a").click(function(event) {
  event.preventDefault();
  $("#caja1").slideUp();
});
});

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
        <h1>Ingreso de Nuevo Editorial</h1>
            </br>
            </br>
            
<link rel="stylesheet" type="text/css" href="table.css">
<link rel="stylesheet" type="text/css" href="formulario.css">
<form action="editorial.php" method="post" autocomplete="off">
<fieldset id="form">
    <ol>
    </br>
    </br>
    </br>
    </br>
     
    <li><label> Nuevo Editorial: </label><input type="text" name="nombreE" size="25" style="background:#F3FCFF"/></li>
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
$nombre_editorial=$_REQUEST['nombreE'];
 $Editorial = mysql_query("SELECT * FROM editorial WHERE nombre_editorial = '".$_POST["nombreE"]."'");

if(mysql_num_rows($Editorial)>0){
       echo "<div class='error mensajes'>La categoria que ha ingresado ya existe</div>";
}

else{
     $S= "insert into editorial values(\"$nombre_editorial \")";
$clase->insertar($S);

if($S) {
echo "<div class='exito mensajes'>La Categoria ha sido agregada exitosamente</div>";
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
   $gene = "SELECT * FROM editorial";
   $resu = mysql_query($gene);
   echo "<form id='act' name='act' method='POST' action=''> ";
   echo "<select name='genero' id='est' onchange='txt(this.id)'>";
   while ($row = mysql_fetch_array($resu)) {
   $identif=$row['nombre_editorial'];
   echo "<option value='" . $row['nombre_editorial'] . "'>" . $row['nombre_editorial'] . "</option>";
      }
   echo "<input type='hidden' id='editorial' name='editorial' value='$identif'>";
   echo "</form>";
    ?>

  <fieldset  id="formm" style="display:none" >
  <ol>
  <form  ="editorial.php" method="post">
  <input type="hidden" id="identi" name="identi" size="25"/>
  <li><label>Nombre Editorial: </label><input type="text" id="otr" name="otr" style="display:none" /></li>
  </ol>     <input type="submit" id="actu" name="actualizar"  style="display:none"  value="Actualizar" />
  </fieldset>
  </form>

       <?php  
            if(isset($_REQUEST['actualizar']))
       {
        $identi=$_POST["identi"];
      if (isset($_POST["otr"]))
      {
     $lb=$_POST["otr"];
     $que1e="UPDATE editorial SET nombre_editorial='$lb' WHERE nombre_editorial='$identi'";
          mysql_query($que1e); 
        }
   
         echo "<meta HTTP-EQUIV='refresh' CONTENT='1'; URL=categoria.php>";
            }
        ?>
              </div> 
                        </br>
</br>
     <a href="#" id="mostrar">Eliminar</a>
<div id="caja">

       <?php 
 $gene = "SELECT * FROM editorial";
$resu = mysql_query($gene);

echo "<form id='act' name='act' method='POST' action='editorial.php'> ";
echo "<select name='editorial'>";
while ($row = mysql_fetch_array($resu)) {
    echo "<option value='" . $row['nombre_editorial'] . "'>" . $row['nombre_editorial'] . "</option>";
}
echo "</select><input type='submit' name='borrar' onClick='return Confirmar(this.form)' value='Borrar'>";
echo "</form>";

          if(isset($_REQUEST['borrar']))
{             $var=$_POST['editorial'];
       $sql=("DELETE FROM editorial where nombre_editorial='$var'");
mysql_query($sql);
echo "<meta HTTP-EQUIV='refresh' CONTENT='1'; URL=categoria.php>";
}
?>
     </div>
                 <div id="content_bottom"></div>
   </div>   </div>   </div>

       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>
      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright  ESMA       </h4>
       </div>
</body>
</html>