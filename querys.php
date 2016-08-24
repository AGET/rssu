<?php

require_once('conexion.php');

class Bd {

    //$resp;
    var $valores;
    var $campos;
    var $insertado;
    var $estadoInserciones;

    function __construct() {
        $this->valores = "";
        $this->campos = "";
    }

    function insertar($array, $tabla) {
        $contador = 0;
        //echo "<script type=\"text/javascript\">alert(\"Ejecutando metoodo\");</script>";
        $xx = count($array);
        //echo "<script type=\"text/javascript\">alert(\"Tabla: $tabla Contador: $xx\" );</script>";
        if (count($array) > 0 && !empty($tabla)) {
            $mysqli = new Conexion();
            $mysqli = $mysqli->conectar();

            foreach ($array as $campo => $valor) {
                ++$contador;
                if ($contador == count($array)) {

                    $this->campos .= $mysqli->escape_string($campo);
                    $this->valores .= "'" . $mysqli->escape_string($valor) . "'";
                } else {
                    $this->campos .= $mysqli->escape_string($campo) . ", ";
                    $this->valores .= "'" . $mysqli->escape_string($valor) . "', ";
                }
            }
            $sql = "INSERT INTO $tabla ($this->campos) VALUES ($this->valores)";
            $this->campos = "";
            $this->valores = "";

            if ($mysqli->query($sql) === true) {
                $this->insertado = $mysqli->insert_id;
                $this->estadoInserciones = true;
            } else {
                echo "ERROR: No fue posible ejecutar el consulta: $sql. " . $mysqli->error;
                $this->estadoInserciones = false;
            }
        }
        //echo "<script type=\"text/javascript\">alert(\"Se ejecuto\");</script>";
        //echo "<script type=\"text/javascript\">alert(\"$sql\");</script>";
        //echo "<div class='txtcarousel'> $sql <br> </div>";
    }

    //$sql = "INSERT INTO empleados (nombre, puesto) VALUES ('$nombre', '$puesto')";
    function consultarGpsDeUsuario($usuario_id) {
        $mysqli = new Conexion();
        $mysqli = $mysqli->conectar();
        $contenido = array();
        $sql = "    SELECT e.enlace_id, g.numero, g.descripcion
                    FROM dbrs.enlace e
                    INNER JOIN dbrs.usuarios u ON ( e.usuario_id = u.usuario_id  )
                    INNER JOIN dbrs.gps g ON ( e.gps_id = g.gps_id  )  where u.usuario_id = $usuario_id";
        if ($result = $mysqli->query($sql)) {
            if ($result->num_rows > 0) {
                mysqli_data_seek($result, 0);
                while ($fila = mysqli_fetch_array($result, MYSQL_ASSOC)) {
                    array_push($contenido, $fila);
                    //                    foreach ($fila as $columna) {
                    //                        echo $columna;
                    //                    }
                }
                mysqli_free_result($result);
                mysqli_close($mysqli);
            }
        }

        return $contenido;
    }

    function ultimoInsertado() {
        return $this->insertado;
    }

    function fallosEnInserciones() {
        return $this->estadoInserciones;
    }

    /**
     * Verifica si una direccion de correo es correcta o no.
     *
     * @author AGET
     * @return areglo asociativo {enlace_id => enlace_id, fecha => fecha,
      logitud => logitud, latitud => latitud, descripcion => descripcion del gps}
     * @param string $enlace_id identificador de enlaces
     */
    function consutarCoordenadasUsarioGps($id_enlace) {

        $mysqli = new Conexion();
        $mysqli = $mysqli->conectar();
        $contenido = array();
        $sql = "    SELECT d.enlace_id, d.fecha, c.longitud, c.latitud, g.descripcion
        FROM dbrs.enlace e
        INNER JOIN dbrs.detalle d ON ( e.enlace_id = d.enlace_id  )
		INNER JOIN dbrs.coordenadas c ON ( d.detalle_id = c.detalle_id  )
		INNER JOIN dbrs.gps g ON ( e.gps_id = g.gps_id  )
		WHERE e.enlace_id = $id_enlace
		ORDER BY d.fecha ASC";

        if ($result = $mysqli->query($sql)) {

            if ($result->num_rows > 0) {

                mysqli_data_seek($result, 0);
                while ($fila = mysqli_fetch_array($result, MYSQL_ASSOC)) {

                    //array_push($contenido, $fila);
                    $lng = $fila["longitud"];
                    $lat = $fila["latitud"];
                    $descripcion = $fila["descripcion"];
                    $fecha = $fila["fecha"];
                    array_push($contenido, array(
                        "lat" => $lat,
                        "lng" => $lng,
                        "descripcion" => $descripcion,
                        "fecha" => $fecha
                    ));
                }
                mysqli_free_result($result);
                mysqli_close($mysqli);
            }
        }


        return $contenido;
    }

}

?>