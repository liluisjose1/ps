<?php 
ob_start();
include("../../config/conexion.php");

$nombre = $_POST["nombre"];
$departamento= $_POST["dep_sec"];

$sql = "INSERT INTO `consejo`(`nombre`, `dep_sec`) VALUES  ('$nombre','$departamento')";
		$ejecutar_consulta = $conexion->query(utf8_decode($sql));
		print($sql);
			if($ejecutar_consulta){
				header("Location: ../consejo.php?error=no");
			}
			else{
				header("Localtion: ../consejo.php?error=si");
			}

 ?>