<?php 
include("../config/conexion.php");

$contenido = $_POST["contenido"];
$departamento= $_POST["dep"];
$mes=$_POST["mes"];
$anio=$_POST["anio"];

$sql = "INSERT INTO `proyectos`(`registro`, `dep_sec`, `mes`, `anio`) VALUES ('$contenido','$departamento','$mes','$anio')";
		$ejecutar_consulta = $conexion->query(utf8_decode($sql));
		print($sql);
			if($ejecutar_consulta){
				$mensaje = "Registro con Exito";
				header("Location: project.php?error=no&mensaje=$mensaje");
			}

 ?>