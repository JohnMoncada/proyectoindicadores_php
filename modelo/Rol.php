<?php
<<<<<<< HEAD
class Rol{
    //atributos, el nombre de las variables deben tener el simbolo $ante el nombre
    var $id;  //si antepongo el var me esta diciendo que id es un atributo, queda como privado
    var $nombre; 

    // constructor = es un metodo que tiene doble funcion - 1-construir el objeto 2-inicializa atributos
    function __construct($id,$nombre){
        $this-> id = $id;
        $this-> nombre = $nombre;
    }
    
    //medotos get: retorna el valor del atributo  
    function getId (){
        return $this->id;
    }
    //metodo set: actualizar o cambiar el valor del atributo y tiene parametros
    function setId($id){
        $this->id =$id;
    }

    function getNombre(){
        return $this->nombre;
    }

    function setNombre($nombre){
        $this->nombre=$nombre ;  
    }


}



=======
    class Rol{
        var $id;
        var $nombre;

        function __construct($id, $nombre){
            $this->id = $id;
            $this->nombre = $nombre;
        }

        function setId($id){
            $this->id = $id;
        }

        function getId(){
            return $this->id;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }

        function getNombre(){
        return $this->nombre;
        }
    }
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
?>