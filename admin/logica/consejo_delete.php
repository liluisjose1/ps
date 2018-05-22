<?php 
ob_start();
include("../../config/conexion.php");

$id = $_POST["id_consejo"];

$sql = "DELETE FROM `consejo` WHERE `id`='$id'";
		$ejecutar_consulta = $conexion->query(utf8_decode($sql));
		print($sql);
			if($ejecutar_consulta){
				header("Location: ../consejo.php?error=no");
			}
			else{
				header("Localtion: ../consejo.php?error=si");
			}

 ?>