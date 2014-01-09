
<?php
require ("clsconexion.php");
include ("conexion.php");
?>

<html>
   <head>
     <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
     </head>
       <body>

<?php

$usuario = "SELECT * FROM usuarios";
$res = mysql_query($usuario);
if ($row = mysql_fetch_array($res)){ 
   echo "<center><h1>Modificar usuario</h2><table border = '1'> \n"; 
   echo "<tr>
 <td>Usuario</td>
 <td>Contraseña</td></tr></center> \n"; 
   
   
do { 
      echo "<tr><td>".$row["usuario"]
      ."</td><td>".$row["password"]."</td></tr> \n"; 
   } while ($row = mysql_fetch_array($res)); 
   echo "</table> \n"; 
} else { 
echo "¡ No se ha encontrado ningún registro !"; 
} 
?>



<?php

                        //modifica

           if(isset($_GET['idl']) && $_GET['action'] == "edit")
{                      $identificador = $_GET['idl'];
                                //echo "edita";

 $cons="select * from usuarios  WHERE usuario= '$identificador'";

 $eject=mysql_query($cons)or die('
 '.mysql_error());

while ($row=mysql_fetch_array($eject))
{

$user=$row['usuario'];
$pass= $row['password'];


          }



?>


    <fieldset id="form">

  <form action="cambiar.php" method="post">
   <input type="hidden" value="<?php echo $identificador; ?>" name="identi" size="25"/>
  <label>Usuario: </label><input type="text" value="<?php echo $user; ?>" name="usu" size="25"  readonly style="background:#F3FCFF"/>
   <label>Contraseña: </label><input type="text"  value="<?php echo $pass; ?>" name="contra" size="25" style="background:#F3FCFF"/>
   
 <input name="enviar" type="submit">
        </fieldset>      <br> <br>
   
</fieldset>

  </form>

     <?php 


     }


       if(isset($_REQUEST['enviar']))
{
        echo "<script language='JavaScript'>
            alert('Modificacion exitosa');
            window.location.href='cambiar.php';
            </script>";



        
        $identi=$_POST["identi"];
      if (isset($_POST["usu"]))

      {
$l=$_POST["usu"];


  $q="UPDATE usuarios SET usuario='$l' WHERE usuario='$identi'";
           mysql_query($q); 

              

             //  echo "<div class='exito mensajes'>Titulo de libro modificado exitosamente</div>";
}

//TITULO//

   if (isset($_POST["contra"]))

      {
$s=$_POST["contra"];


  $con="UPDATE usuarios SET password='$s' WHERE password='$identi'";
           mysql_query($con);

}
              } 
       ?>

 
        </div>
         <div id="content_bottom"></div>
         <input type="submit" name="enviar" value="Modificar">
            

   </div>
      </div>


       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>

      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright © ESMA       </h4>



      </div>
</body>
</html>