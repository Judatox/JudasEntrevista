<?php
	
	$mysqli = new mysqli('localhost', 'root', 'root', 'hacsys');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}

?>