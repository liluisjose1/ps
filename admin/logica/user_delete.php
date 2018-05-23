<?php 
ob_start();
header('Content-Type: text/html; charset=utf-8');
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