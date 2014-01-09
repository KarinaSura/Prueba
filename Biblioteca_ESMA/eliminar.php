<?php
if(isset($_REQUEST['id'])){
require('clases/nota.php');

$cliente_id=$_REQUEST['id'];
$objCliente=new Cliente;
if( $objCliente->eliminar($cliente_id) == true){
header("location:resultado.php");
	echo "Registro eliminado correctamente";
}else{
	echo "Ocurrio un error";
	
}
}else{
header("location:resultado.php");
}
?>