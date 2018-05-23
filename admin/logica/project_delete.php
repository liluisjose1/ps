<?php 
ob_start();
include("../../config/conexion.php");

$id= $_GET["id"];
//delete
//$sql_delete = "DELETE FROM `proyectos` WHERE `id`=$id";
$sql = "DELETE FROM `proyectos` WHERE `id`='$id'";
		$ejecutar_consulta = $conexion->query(($sql));
		
		print($sql);
			if($ejecutar_consulta){
				header("Location: ../project_view.php?error=no");
			}
			else{
				header("Localtion: ../project_view.php?error=si");
			}

 ?>