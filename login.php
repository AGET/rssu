<?php
require_once('conexion.php');
class Login {

	var $usuario;
	var $datos;

	function validar($nombre,$contrase_na){
		$this->datos = array('status' => false );
		$mysqli = new Conexion();
		$mysqli = $mysqli->conectar();
		$nombre= $mysqli->escape_string($nombre);
		$contrase_na= $mysqli->escape_string($contrase_na);
		$sql = "SELECT COUNT(*) FROM usuarios WHERE nombre = '$nombre'";
		//$sql = "SELECT usuario FROM usuarios WHERE nombre = '$nombre'";

		echo "<script>alert('$sql');</script>";
		if ($result = $mysqli->query($sql)) {
			if ($result->num_rows > 0) {
				$fila = $result->fetch_array();
				$this->usuario = $fila[0];
				$sql = "SELECT contrase_na FROM usuarios WHERE nombre = '$nombre'";
				if ($result = $mysqli->query($sql)) {
					$fila = $result->fetch_array();
					$pass = $fila[0];
					if($pass == $contrase_na){
						session_start();
       	   				$_SESSION['usuario'] = $nombre;
       	   				$this->datos['mensaje'] = 'Ha ingresado satisfactoriamente.';
       	   				$this->datos['status'] = true;
       	   				//header('Location: x.php');
					}else{
						$this->datos['mensaje'] = 'Ha ingresado una contraseña incorrecta.';
						$this->datos['status'] = false;
					}
				}else{
					$this->datos['mensaje'] = "Error no fue posible ejecutar el comando para password";
					$this->datos['status'] = false;
				}
			}else{
				$this->datos['mensaje'] = "Ha introducido un usuario invalido";
				$this->datos['status'] = false;
			}
		}else{
			$this->datos['mensaje'] = "Error no fue posible ejecutar el comando para usuario";
			$this->datos['status'] = false;
		}
		return $this->datos;
	}

	function usuarioActual(){
		if(!$this->datos['status'] == true){
			return $this->usuario;
			//return "ya jalo";
		}else{
			return "no se ha iniciado sesion";
		}
		return 'jala';
	}
}