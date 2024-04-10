<?php
class ControlUsuario{
    var $objUsuario;  //declarando el atributo (variable)
    function __construct($objUsuario){ //sirve para construir el objeto, he inicializa atributos
        $this->objUsuario = $objUsuario;  //los atributos se manipulan con $this->
    }

    function listar(){
       //pendiente
    }   
    
    function consultar(){
        $email=$this->objUsuario->getEmail();
        $objControlConexion = new ControlConexion(); //instanciamos una clase 
        $ComandoSql="SELECT * FROM usuario WHERE email='$email'";
        $objControlConexion->abrirBd('localhost','root','','bd_indicadores','3306'); 
        $recordSet=$objControlConexion->ejecutarSelect($ComandoSql);
        if($row = mysqli_fetch_array($recordSet, MYSQL_BOTH)){
            $contrasena=$row['contrasena'];
            $this->objUsuario->setContrasena($contrasena);
        }
        $objControlConexion->cerrarBd();
        return $this->objUsuario;
    }   

    function guardar(){
        $email=$this->objUsuario->getEmail();
        $contrasena=$this->objUsuario->getContrasena();
        $objControlConexion = new ControlConexion(); //instanciamos una clase 
        $ComandoSql="INSERT INTO usuario(email,contrasena) VALUES('$email','$contrasena') ";
        $objControlConexion->abrirBd('localhost','root','','bd_indicadores','3306'); 
        $objControlConexion->ejecutarComandoSql($ComandoSql);
        $objControlConexion->cerrarBd();
    }

    function modificar(){
        $email=$this->objUsuario->getEmail();
        $contrasena=$this->objUsuario->getContrasena();
        $objControlConexion = new ControlConexion(); //instanciamos una clase 
        $ComandoSql="UPDATE usuario SET contraseña='$contrasena' WHERE email='$email'";
        $objControlConexion->abrirBd('localhost','root','','bd_indicadores','3306'); 
        $objControlConexion->ejecutarComandoSql($ComandoSql);
        $objControlConexion->cerrarBd();
    }

     function borrar(){
        $email=$this->objUsuario->getEmail();
        $objControlConexion = new ControlConexion(); //instanciamos una clase 
        $ComandoSql="DELETE FROM usuario WHERE email='$email'";
        $objControlConexion->abrirBd('localhost','root','','bd_indicadores','3306'); 
        $objControlConexion->ejecutarComandoSql($ComandoSql);
        $objControlConexion->cerrarBd();
    }   



    

   


}

?>