<?php
require_once("clsconexion.php");

class mmto extends clsconexion
{
	
	function insertar($sql)
	{
		$con = parent::conectar();
		parent::SelectDB();
		if(!mysql_query($sql,$con))
		{
			echo "Error";
			return false;
		}


		return true;
		parent::desconectar($con);
	}
	
	function mostrar($tabla)
	{
		$con = parent::conectar();
		parent::SelectDB();
		$sql = "select * from $tabla";
		$res = mysql_query($sql, $con);
		$ncampos = mysql_num_fields($res);
		print "<center>";
		print "<table border='1'>";
		print "<br>";
		for($pos=0; $pos<$ncampos; $pos++)
		{
			print "<td><b>". mysql_field_name($res,$pos)."</b></td>";
		}
		print "</tr>";
		
		for($i=0;$i<$ncampos;$i++)
		{
			while($fila = mysql_fetch_row($res))
			{
				print "<tr>";
				for($j=0;$j<$ncampos;$j++)
				{
					print "<td>$fila[$j]</td>";
				}
			print "</td>";
			}
		}
		print "</table>";
		print "</center>";
		mysql_free_result($res);
		parent::desconectar($con);
		return true;
	}
	
	function eliminar($tabla, $campo, $valor)
	{
		$con = parent::conectar();
		parent::SelectDB();
		$sql="delete from  $tabla where $campo = $valor";
		$result = mysql_query($sql,$con);
		parent::desconectar($con);
		return true;
	}
	
	function modificar($sql)
	{
		$con=parent::conectar();
		parent::SelectDB();
		if(!mysql_query($sql,$con))
		{
			echo "error eliminar";
			return false;
		}
	return true;
	parent::desconectar($con);
	}
	
	function verificar($login, $pass)
	{
		$sql ="Select codigo from usuario where login=\"$login\" and pass=\"$pass\"";
		$con = parent::conectar();
		parent::selectDB();
		$res=mysql_query($sql, $con);
		$fila=mysql_fetch_row($res);
		
		if($fila[0]=="")
		{
			print "<script>alert(\"usuario o pass incorrecta\");</script>";
		}else{
			header("Location:empleado.php");	
		}
		
		parent::desconectar($con);
	}
	
	function registrar()
	{
		$con = parent::conectar();
		parent::SelectDB();
		if(!mysql_query($sql,$con))
		{
			echo "Error";
			return false;
		}
		return true;
		parent::desconectar($con);
	}
}
?>