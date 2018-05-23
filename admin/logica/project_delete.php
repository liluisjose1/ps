<?php 
ob_start();
header('Content-Type: text/html; charset=utf-8');
include("../../config/conexion.php");

$id= $_GET["id"];
//delete
//$sql_delete = "DELETE FROM `proyectos` WHERE `id`=$id";
$sql = "DELETE FROM `proyectos` WHERE `id`='$id'";
		$ejecutar_consulta = $conexion->query(utf8_decode($sql));
		
		print($sql);
			if($ejecutar_consulta){
				header("Location: ../project_view.php?error=no");
			}
			else{
				header("Localtion: ../project_view.php?error=si");
			}

 ?>