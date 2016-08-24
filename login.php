<?php

require_once('conexion.php');

class Login {

    var $usuario;
    var $datos;

    function validar($correo, $clave) {
        $this->datos = array('status' => false);
        $mysqli = new Conexion();
        $mysqli = $mysqli->conectar();
        $correo = $mysqli->escape_string($correo);
        $contrase_na = $mysqli->escape_string($clave);
        $sql = "SELECT COUNT(*) FROM usuarios WHERE correo = '$correo'";
        //$sql = "SELECT usuario FROM usuarios WHERE nombre = '$nombre'";

        if ($result = $mysqli->query($sql)) {
            if ($result->num_rows > 0) {
                $fila = $result->fetch_array();
                $this->usuario = $fila[0];
                $sql = "SELECT usuario_id, contrase_na, nombre FROM usuarios WHERE correo = '$correo'";
                if ($result = $mysqli->query($sql)) {
                    $fila = $result->fetch_array();
                    $id = $fila[0];
                    $pass = $fila[1];
                    $nombre = $fila[2];
                    //echo "string".$pass;
                    if ($pass == $contrase_na) {
                        session_start();
                        $_SESSION['usuario_id'] = $id;
                        $_SESSION['nombre'] = $nombre;
                        $_SESSION['pass'] = $pass;
                        $this->datos['mensaje'] = 'Ha ingresado satisfactoriamente.';
                        $this->datos['status'] = true;
                        //header('Location: x.php');
                    } else {
                        $this->datos['mensaje'] = 'Ha ingresado una contraseña incorrecta.';
                        $this->datos['status'] = false;
                    }
                } else {
                    $this->datos['mensaje'] = "Error no fue posible ejecutar el comando para password";
                    $this->datos['status'] = false;
                }
            } else {
                $this->datos['mensaje'] = "Ha introducido un usuario invalido";
                $this->datos['status'] = false;
            }
        } else {
            $this->datos['mensaje'] = "Error no fue posible ejecutar el comando para usuario";
            $this->datos['status'] = false;
        }
        return $this->datos;
    }

    function usuarioActual() {
        if (!$this->datos['status'] == true) {
            return $this->usuario;
            //return "ya jalo";
        } else {
            return "no se ha iniciado sesion";
        }
        return 'jala';
    }

}
