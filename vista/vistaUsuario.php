<?php
include '../modelo/Usuario.php'; //para llamar el archivo del modelo en este caso usuario.php
include '../control/ControlUsuario.php';
include '../control/ControlConexion.php';
//instancio la clase usuario
$objUsuario = new Usuario ("johmoncada3@gmail.com","12356");
$objControlUsuario = new ControlUsuario ($objUsuario);
$objControlUsuario->guardar();

/*Ingresar TALLER PARA PARCIAL 
HACER FUNCIONAR EL MODIFICAR
HACER FUNCIONAR EL BORRAR */
?>
