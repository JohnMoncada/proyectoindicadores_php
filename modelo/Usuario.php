<?php
<<<<<<< HEAD
class Usuario{
    //atributos, el nombre de las variables deben tener el simbolo $ante el nombre
    var $email;  //si antepongo el var me esta diciendo que email es un atributo, queda como privado
    var $contrasena; 

    // constructor = es un metodo que tiene doble funcion - 1-construir el objeto 2-inicializa atributos
    function __construct($email,$contrasena){
        $this-> email = $email;
        $this-> contrasena = $contrasena;
    }
    
    //medotos get: retorna el valor del atributo  
    function getEmail (){
        return $this->email;
    }
    //metodo set: actualizar o cambiar el valor del atributo y tiene parametros
    function setEmail($email){
        $this->email =$email;
    }

    function getContrasena(){
        return $this->contrasena;
    }

    function setContrasena($contrasena){
        $this->contrasena=$contrasena ;  
    }


}



=======
  class Usuario{
  	var $email, $contrasena;

  	function __construct($email,$contrasena){
  		$this->email = $email;
  		$this->contrasena = $contrasena;
  	}

  	function setEmail($email){
  		$this->email = $email;
  	}

  	function getEmail(){
  		return $this->email;
  	} 

  	function setContrasena($contrasena){
  		$this->contrasena = $contrasena;
  	}

  	function getContrasena(){
  		return $this->contrasena;
  	}    		
  }
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
?>