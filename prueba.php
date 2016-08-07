<?php
require_once('querys.php');
$x = new Bd();
$array = array('nombre' => '$nombre', 'puesto' => '$puesto');
		$tabla = 'empleados';
$x->insertar($array,$tabla);
//echo $x->dame_numero(); 

?>