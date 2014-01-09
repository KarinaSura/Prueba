<html>
<head>
	<title>Salir del sistema</title>
</head>
<body bgcolor="#0A526F"></br>
<center><img src="images/ban.png"/></center></br></br>
<center><h2><FONT FACE="century gothic" SIZE=5 COLOR=white>Usted esta saliendo del sistema clic en la imagen</h2></FONT></center>

<?php 

session_start();
session_destroy();
echo "<center><a href='../../index.php' target='_blank'><img src='images/logout.png' width='200' heigth='200'></a></center>";    
?>
</body>
</html>

