<?php 
ob_start();
include("../../config/conexion.php");

$id = $_POST["id_user"];

$sql = "DELETE FROM `usuario` WHERE `usuario`='$id'";
		$ejecutar_consulta = $conexion->query(utf8_decode($sql));
		print($sql);
			if($ejecutar_consulta){
				header("Location: ../users.php?error=no");
			}
			else{
				header("Localtion: ../users.php?error=si");
			}

 ?>