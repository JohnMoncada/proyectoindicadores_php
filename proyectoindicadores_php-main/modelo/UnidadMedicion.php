<?php
class UnidadMedicion{
    var $id;
    var $descripcion;

function __construct($id,$descripcion){
    $this->id=$id;
    $this->descripcion=$descripcion;
}

function getId(){
    return $this->id;
}
function setId($id){
    $this->id=$id;
}


function getDescripcion(){
    return $this->descripcion;
}
function setDescripcion($descripcion){
    $this->id=$descripcion;
}

}


?>