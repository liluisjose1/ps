<?php
/*~ Archivo conexion.php
.---------------------------------------------------------------------------.
|    Software: SI - Proyeccion Social FMO                                   |
|     Versión: 1.0                                                          |
|   Lenguajes: PHP, HTML, CSS3 y Javascript                                 |
| ------------------------------------------------------------------------- |
|   Autores: Luis Iraheta                                                   |
| Copyright (C) 2018, FMO-UES. Todos los derechos reservados.               |
| ------------------------------------------------------------------------- |
|                                                                           |
| Este archivo es parte del sistema de informacion SI  para la Unidad       |
| de proyeccion social .                                                    |
|                                                                           |
'---------------------------------------------------------------------------'
*/

	function conectarse()
	{
		$servidor 	=	 "localhost";
		$usuario 	=	 "root";
		$password 	=	 "";
		$bd 		=	 "ps";

		$conectar = new mysqli($servidor, $usuario, $password, $bd);
		    return $conectar;
	}

	$conexion = conectarse();
?>
