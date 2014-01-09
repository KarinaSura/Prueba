<?php
class clsconexion{

private $BD;
private $server;
private $user;
private $pass;


function clsconexion()
{
	$this-> BD = "biblioteca";
	$this-> server="localhost";
	$this-> user="root";
	$this-> pass="";
}

function conectar()
{
	if(!$con=mysql_connect($this->server, $this->user, $this->pass))
	{
		echo "No hay conexion";
		exit();
	}
	return $con;
}

function SelectDB()
{
	mysql_select_DB($this->BD);
}

function desconectar($con)
{
	if(!mysql_close($con)){
		echo "no se desconecto";
	}
}

function getBD(){
	return $this-> BD;
}

function getuser()
{
	return $this->pass;
}
}
?>