<?php
require_once('conexion.php');
class Bd{
	//$resp;
	var $valores;
	var $campos;
	var $insertado;
	var $estadoInserciones;

	function __construct() {
		$this->valores = "";
		$this->campos = "";
   }
	
	function insertar($array, $tabla){
		$contador = 0;
		//echo "<script type=\"text/javascript\">alert(\"Ejecutando metoodo\");</script>";  
		$xx = count($array);
		//echo "<script type=\"text/javascript\">alert(\"Tabla: $tabla Contador: $xx\" );</script>";  
		if(count($array) > 0 && !empty($tabla)){
			$mysqli = new Conexion();
			$mysqli = $mysqli->conectar();

			foreach ($array as $campo => $valor) {
				++$contador;
				if ($contador == count($array)) {

					$this->campos .= $mysqli->escape_string($campo);
					$this->valores .= "'" . $mysqli->escape_string($valor) . "'";
				}else{
					$this->campos .= $mysqli->escape_string($campo). ", ";
					$this->valores .= "'" . $mysqli->escape_string($valor) ."', "; 
				}
			}
			$sql = "INSERT INTO $tabla ($this->campos) VALUES ($this->valores)" ;
			$this->campos = "";
			$this->valores = "";

			if ($mysqli->query($sql) === true) {
				$this->insertado = $mysqli->insert_id;
				$this->estadoInserciones = true;
			} else {
				echo "ERROR: No fue posible ejecutar el consulta: $sql. " .$mysqli->error;
				$this->estadoInserciones = false;
			}
		}
		//echo "<script type=\"text/javascript\">alert(\"Se ejecuto\");</script>";  
		//echo "<script type=\"text/javascript\">alert(\"$sql\");</script>";  
		//echo "<div class='txtcarousel'> $sql <br> </div>";
	}
	//$sql = "INSERT INTO empleados (nombre, puesto) VALUES ('$nombre', '$puesto')";
	function consultar(){
		return resp;
	}
	
	function ultimoInsertado(){
		return $this->insertado;
	}

	function fallosEnInserciones(){
		return $this->estadoInserciones;
	}
}

?>