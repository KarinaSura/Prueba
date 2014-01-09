<?php 
include_once("conexion.class.php");

class Cliente{
 //constructor	
 	var $con;
 	function Cliente(){
 		$this->con=new DBManager;
 	}



	function insertar($campos){
		if($this->con->conectar()==true){
			//print_r($campos);
			//echo "INSERT INTO nota (id_materia, carnet_alumno,periodo,fecha_edicion,nota1,nota2,nota3,promedio) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO detalle (codigo_libro,nombre_libro,nombre_autor,nombre_editorial,nombre_genero,fechasalida,fechadevolucion,numero_comprobante) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."','".$campos[5]."','".$campos[6]."','".$campos[7]."')");

	parent::Desconectar($con);
		}
		
	}
	//

	function insertar1($campos){
		if($this->con->conectar()==true){
			//print_r($campos);
			//echo "INSERT INTO nota (id_materia, carnet_alumno,periodo,fecha_edicion,nota1,nota2,nota3,promedio) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')";
			return mysql_query("INSERT INTO prestamos (codigo_prestamo,codigo_libro,usuario_codigo,fechasalida,fechadevolucion) VALUES ('".$campos[0]."', '".$campos[1]."','".$campos[2]."','".$campos[3]."','".$campos[4]."')");

	parent::Desconectar($con);
		}
		
	}
	
	
	
	//
	
	function actualizar($campos,$id){
		if($this->con->conectar()==true){
			//print_r($campos);
			return mysql_query("UPDATE nota SET materia = '".$campos[0]."', carnet_alumno = '".$campos[1]."',carnet_docente = '".$campos[2]."', periodo = '".$campos[3]."', fecha_edicion = '".$campos[4]."',year_nota='".$campos[5]."', nota1 = '".$campos[6]."',nota2 = '".$campos[7]."',nota3 = '".$campos[8]."',promedio = '".$campos[9]."' WHERE id_nota = ".$id);
		parent::Desconectar($con);
		}
		
	}
	
	function mostrar_cliente($id){
		if($this->con->conectar()==true){
			return mysql_query("SELECT * FROM nota WHERE id_nota=".$id);
			parent::Desconectar($con);
		}
	}

	

	function eliminar($id){
		if($this->con->conectar()==true){
			return mysql_query("DELETE FROM detalle WHERE codigo_libro=".$id);
		}
	}
}
?>