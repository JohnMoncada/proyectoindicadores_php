<?php
include '../modelo/Usuario.php';
include '../control/ControlUsuario.php';
include '../control/ControlConexion.php';
$objUsuario= new Usuario("ccastro@empresa.com","123");
$objControlUsuario= new ControlUsuario($objUsuario);
$objControlUsuario->guardar();
//tarea hacer funcionar el modificar y el borrar
?>