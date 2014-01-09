 <?php
require ("clsconexion.php");


include ("conexion.php");


?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
<title>Sans Titre</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta name="generator" content="HAPedit 3.1">
</head>
<body bgcolor="#FFFFFF">
 <?php 


       if(isset($_REQUEST['modificar']))
{
        $identi=$_POST["identi"];
      if (isset($_POST["id"]))

      {
$lb=$_POST["id"];


  $que1="UPDATE libros SET codigo_libro='$lb' WHERE titulo_libro='$identi'";
           mysql_query($que1);      

              echo "<div class='exito mensajes'>modifico</div>";



              }



              } 



?>




     <?php 

    


      ?>
</body>

</html>