<?php
class Frecuencia{
    var $id;
    var $descripcion;

    function __construct($id,$descripcion){
        $this->id=$id; // asigna el valor de la variable $id a la propiedad id del objeto
        $this->descripcion=$descripcion;
    }
    
    function getId (){
        return $this->id;
    }
    function setId($id){
        $this->id = $id;
    }

    function getDescripcion (){
        return $this->descripcion;
    }
    function setDescripcion($descripcion){
        $this->id = $descripcion;
    }

}
    



?>