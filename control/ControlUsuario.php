<?php
class ControlUsuario{
    var $objUsuario;  //declarando el atributo (variable)
    function __construct($objUsuario){ //sirve para construir el objeto, he inicializa atributos
        $this->objUsuario = $objUsuario;  //los atributos se manipulan con $this->
    }

    function listar(){
        $comandoSql = "SELECT * FROM usuario";
        $objControlConexion = new ControlConexion();
        $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
        $recordSet = $objControlConexion->ejecutarSelect($comandoSql);
        if (mysqli_num_rows($recordSet) > 0) {
            $arregloUsuarios = array();
            $i = 0;
            while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $objUsuario = new Usuario("","");
                $objUsuario->setEmail($row['email']);
                $objUsuario->setContrasena($row['contrasena']);
                $arregloUsuarios[$i] = $objUsuario;
                $i++;
            }
        }
        $objControlConexion->cerrarBd();
        return $arregloUsuarios;
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