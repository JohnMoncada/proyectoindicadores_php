<?php
<<<<<<< HEAD
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

=======
    class ControlUsuario{
        
	   var $objUsuario;

        function __construct($objUsuario){
            $this->objUsuario = $objUsuario;
        }

        function validarIngreso(){
                $msg = "ok";
                $validar = false;
                $usu = $this->objUsuario->getNomUsuario(); 
                $con = $this->objUsuario->getContrasena();
                $comandoSql = "SELECT * FROM tblUsuario WHERE nomUsuario='$usu' AND contrasena='$con'";
                $objControlConexion = new ControlConexion();
                $objControlConexion->abrirBd($GLOBALS['serv'], GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
                $recordSet = $objControlConexion->ejecutarSelect($comandoSql);
                try
                {
                    if (mysqli_num_rows($recordSet) > 0) 
                    {
                        $validar = true;
                    }
                    $objControlConexion->cerrarBd();
                }
                catch (Exception $objExcetion)
                {
                    $msg = $objExcetion->getMessage();
                } 
                return $validar;
        }

        function consultarRolesPorUsuario($nomUsu){
            $msg = "ok";
            $listadoRolesDelUsuario = [];
            $comandoSQL = "SELECT fkIdRol FROM tblrol_usuario WHERE fkNomUsuario='$nomUsu'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
            $recordSet = $objControlConexion->ejecutarSelect($comandoSQL);
            try
            {
                if (mysqli_num_rows($recordSet) > 0)
                {
                    $i = 0;
                    while ($row = $recordSet->fetch_array(MYSQLI_BOTH))
                    {
                        $listadoRolesDelUsuario[$i] = $row[0];
                        $i++;
                    }
                    $objControlConexion->cerrarBd();
                }
            }
            catch (Exception $objExcetion)
            {
                $msg = $objExcetion->getMessage();
            }
            return $listadoRolesDelUsuario;
        }

        function guardar(){
            $ema = $this->objUsuario->getEmail(); 
            $con = $this->objUsuario->getContrasena();
                
            $comandoSql = "INSERT INTO usuario(email,contrasena) VALUES ('$ema', '$con')";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
            $objControlConexion->ejecutarComandoSql($comandoSql);
            $objControlConexion->cerrarBd();
        }
        
        function consultar(){
            $ema= $this->objUsuario->getEmail(); 
        
            $comandoSql = "SELECT * FROM usuario WHERE email = '$ema'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
            $recordSet = $objControlConexion->ejecutarSelect($comandoSql);
            if ($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $this->objUsuario->setContrasena($row['contrasena']);
            }
            $objControlConexion->cerrarBd();
            return $this->objUsuario;
        }

        function modificar(){
            $ema = $this->objUsuario->getEmail(); 
            $con = $this->objUsuario->getContrasena();
            
            $comandoSql = "UPDATE usuario SET contrasena='$con' WHERE email = '$ema'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
            $objControlConexion->ejecutarComandoSql($comandoSql);
            $objControlConexion->cerrarBd();
        }

        function borrar(){
            $ema= $this->objUsuario->getEmail(); 
            $comandoSql = "DELETE FROM usuario WHERE email = '$ema'";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'],$GLOBALS['usua'],$GLOBALS['pass'],$GLOBALS['bdat'],$GLOBALS['port']);
            $objControlConexion->ejecutarComandoSql($comandoSql);
            $objControlConexion->cerrarBd();
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
    }
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
?>