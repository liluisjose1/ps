<?php 
//ob_start();

include("../../config/conexion.php");


$sql = "TRUNCATE TABLE proyectos;";
		$ejecutar_consulta = $conexion->query(utf8_decode($sql));
		print($sql);
			if($ejecutar_consulta){
				header("Location: ../mantenimiento.php?error=no");
			}
			else{
				header("Localtion: mantenimiento.php");
			}

 ?>