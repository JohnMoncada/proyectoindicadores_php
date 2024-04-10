<?php
<<<<<<< HEAD
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
=======
include '../modelo/Usuario.php';
include '../control/ControlUsuario.php';
include '../control/ControlConexion.php';
$objUsuario= new Usuario("ccastro@empresa.com","123");
$objControlUsuario= new ControlUsuario($objUsuario);
$objControlUsuario->guardar();
//tarea hacer funcionar el modificar y el borrar
?>
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
