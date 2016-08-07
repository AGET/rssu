<?php

class Conexion{
	var $mysqli;
	function conectar(){
		 $this->mysqli = new mysqli("localhost", "root", "", "dbrs");
		if ($this->mysqli === false) {
			die("ERROR: No fue posible conectarse con la base de datos. " .mysqli_connect_error());	
		}

		return $this->mysqli;
	}
}
?>

