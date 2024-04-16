<?php
    class ControlRol{
        var $objRol;

        function __construct($objRol){
            $this->objRol = $objRol;
        }

        function guardar(){
            $nom = $this->objRol->getNombre(); //Asigna a la variable nom el nombre que está dentro del objeto.
            $comando = "insert into rol(nombre) values('$nom')"; //Cadena de caracteres donde se construye el comando Sql.
            $objControlConexion = new ControlConexion(); //Se instancia la clase controlConexion.
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']); //Se invoca el método abrirBd.
            $objControlConexion->ejecutarComandoSql($comando); //Se invoca el método ejecutarComandoSql.
            $objControlConexion->cerrarBd();
        }

        function listar(){
            $comandoSql = "SELECT * FROM rol";
            $objControlConexion = new ControlConexion();
            $objControlConexion->abrirBd($GLOBALS['serv'], $GLOBALS['usua'], $GLOBALS['pass'], $GLOBALS['bdat'], $GLOBALS['port']);
            $recordSet = $objControlConexion->ejecutarSelect($comandoSql);
            if (mysqli_num_rows($recordSet) > 0) {
                $arregloRoles = array();
                $i = 0;
                while($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                    $objRol = new Rol(0,"");
                    $objRol->setId($row['id']);
                    $objRol->setNombre($row['nombre']);
                    $arregloRoles[$i] = $objRol;
                    $i++;
                }
            }
            $objControlConexion->cerrarBd();
            return $arregloRoles;
        }
    }
?>