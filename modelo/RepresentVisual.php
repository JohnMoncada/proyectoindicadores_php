<?php
class RepresentVisual{

    var $id;
    var $nombre;

    function __construct($id,$nombre){
        $this->id=$id;
        $this->nombre=$nombre;
    }

    function getId(){
        return $this->id;
    }
    function setId($id){
        $this->id=$id;
    }

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }

}


?>