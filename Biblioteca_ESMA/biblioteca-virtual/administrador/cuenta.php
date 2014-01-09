
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
include("conexion.php");
  require_once("conexion.php");
    session_start();
?>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"/>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Sistema Bibliotecario ESMA</title>
</head>

<body>
<div id="container">
        <div id="header">
        </div>   
        
        <div id="menu">
            <ul>
                <li class="menuitem"><a href="#">INICIO</a></li>
               <li class="menuitem"><a href="logout.php">CERRAR SESION</a></li>
               <li class="menuitem"><a href="cuenta.php">MI CUENTA</a></li>
               <li class="menuitem"><a href="nuevousuario.php">NUEVO USUARIO</a></li>
            </ul>
        </div>
        
        <div id="leftmenu">

        <div id="leftmenu_top"></div>

                <div id="leftmenu_main">    
                
                <h3><center>ADMINISTRACION DE LIBROS</center></h3>
                        
                <ul>
                     <li><a href="categoria.php">Administracion de Categorias</a></li>
                     <li><a href="editorial.php">Administracion de Editoriales</a></li>
                     <li><a href="libros.php">Administracion de Libros</a></li>
                   
                </ul>     </div>
                      <div id="leftmenu_main">
                <h3 "style=border-top:5px solid black;"><center>Prestamos</center></h3>
                        
                <ul>
                  <li><a href="prestamos.php">Prestamos</a></li>
                    <li><a href="comprobante.php">Comprobante</a></li>

                   
                </ul>

</div>
                
                
              <div id="leftmenu_bottom"></div>
        </div>
        
        
        
        
        <div id="content">
        
        
        <div id="content_top"></div>
        <div id="content_main">
      </br>
            </br>

            <link rel="stylesheet" type="text/css" href="table.css">
            <link rel="stylesheet" type="text/css" href="formulario.css">
            <form action="cuenta.php" method="post" autocomplete="off">
           <fieldset id="form">
       <center><h2>Busque usuario a modificar</h2></center>  <br>
       <label>Buscar</label><input name="buscar" placeholder="Nombre de usuario" type="text" style="background:#F3FCFF">
       <input name="Enviar" type="submit">
        </fieldset>      <br> <br>

       </form>

<?php
if(isset($_REQUEST['Enviar']))
{
$buscar=$_POST['buscar'];
$consulta_mysql="select * from usuarios  WHERE usuario LIKE '%".$buscar."%'";
$resultado_consulta_mysql= mysql_query($consulta_mysql);

if (strlen($buscar)<1) 
{
echo "<center><h2>Inserte un nombre de usuario en la caja de texto</h2></center>"; }

else {
   $num_reply = @mysql_num_rows($resultado_consulta_mysql);

if ($num_reply==0) {
    echo "<center><h2>Ese usuario no existe en la base de datos</h2></center>";
}

    else {
while($registro=mysql_fetch_array($resultado_consulta_mysql))
{
$nom=$registro["usuario"] ;
$pass=$registro["password"]   ;
echo "<table border = '1'> \n"; 
   echo "<tr>
 <td>Nombre</td><td>Modificar</td></tr> \n"; 
   
   
   do { 
      echo "<tr><td>".$registro["usuario"]. "<td><a href='cuenta.php?action=edit&idl=".$registro["usuario"]."'>modificar</a></td>";
   } while ($registro = mysql_fetch_array($resultado_consulta_mysql));
   echo "</table> \n"; 
   }
   }
   }
   }
     ?>
  
  <?php


                        //modifica

           if(isset($_GET['idl']) && $_GET['action'] == "edit")
{                      $identificador = $_GET['idl'];
                           

 $cons="select * from usuarios  WHERE usuario= '$identificador'";

 $ejec=mysql_query($cons)or die('
 '.mysql_error());

while ($row=mysql_fetch_array($ejec))
{

$usuario=$row['usuario'];
$password= $row['password'];
          }
?>


    <fieldset id="form">
<legend>Modificar</legend>
<ol>
   <form class="form-presta" id="form"  method="POST">

   <input type="hidden" value="<?php echo $identificador; ?>" name="identi" size="25"/>
   <li><label>Nombre: </label><input type="text" value="<?php echo $usuario; ?>" name="nom" size="25"/></li>
   <li><label>Contrase&ntilde;a: </label><input type="text" value="<?php echo $password; ?>" name="pass" size="25"/></li>
   <li><label>Confirme Contrase&ntilde;a: </label><input type="text" value="<?php echo $password; ?>" name="pass1" size="25"/></li>
</ul>
   
</fieldset>
<input type="submit" name="modificar" value="Modificar" />
  </form>

     <?php 
            }

       if(isset($_REQUEST['modificar']))
        {
        $identi=$_POST["identi"];
      if (isset($_POST["id"]))
        {
          $lb=$_POST["id"];
          $que1="UPDATE usuarios SET id_usuario='$lb' WHERE usuario='$identi'";
           mysql_query($que1); 
        }


   if (isset($_POST["nom"]))
      {
        $nomb=$_POST["nom"];
        $cons="UPDATE usuarios SET usuario='$nomb' WHERE usuario='$identi'";
                 mysql_query($cons);               
      }  

      $valor = $_POST['pass'];
      $valor2 = $_POST['pass1'];                     
if ($valor == $valor2) {

       echo "<script language='JavaScript'>
            alert('Modificacion exitosa');
            window.location.href='cuenta.php';
            </script>";

   if (isset($_POST["pass"]))
      {
$passw=$_POST["pass"];
  $cont="UPDATE usuarios SET password='$passw' WHERE usuario='$identi'";
           mysql_query($cont);

}
}else{
  echo "<script language='JavaScript'>
            alert('La contrasena no es igual');
            
            </script>";
}
              }
       ?>
        </div>
        <div id="content_bottom"></div>   
            <div id="footer"><h3><a href="">Direccion Nacional de Formacion Continua</a></h3></div>
      </div>
   </div>
        </div>
         <div id="content_bottom"></div>
   </div>
      </div>
       <div id="footer"><h3 style="margin-left: 40%;text-transform: uppercase;"><a href="">Direccion Nacional de Formacion Continua</a></h3>
      <h4 style="margin-left: 46%;margin-top:5px;color:white;"> Copyright  &copy ESMA        </h4>
      </div>
</body>
</html>
</body>
</html>