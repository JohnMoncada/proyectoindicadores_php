<?php

class ControlConexion{
	
	var $conn;
	
	function __construct(){
		$this->conn = null;
	}

    function abrirBd($servidor, $usuario, $password, $db, $port){
    	try	{
			$this->conn = new mysqli($servidor, $usuario, $password, $db, $port);
			if ($this->conn->connect_errno) {
			printf("Connect failed: %s\n", $this->conn->connect_error);
			exit();
			}
      	}
      	catch (Exception $e){
          	echo "ERROR AL CONECTARSE AL SERVIDOR ".$e->getMessage()."\n";
      	}

    }

    function cerrarBd() {
		try{
       $this->conn->close();
		}
      	catch (Exception $e){
          	echo "ERROR AL CONECTARSE AL SERVIDOR ".$e->getMessage()."\n";
      	}		
    }

    function ejecutarComandoSql($sql) {
		//Este metodo lo utilizaremos para inset into, update, delete.
    	try	{
			$this->conn->query($sql);
			}
		catch (Exception $e) {
				echo " NO SE AFECTARON LOS REGISTROS: ". $e->getMessage()."\n";
		  }	
		}

	function ejecutarSelect($sql) {
		//Select
			try	{
				$recordSet=$this->conn->query($sql);
				}
	
			catch (Exception $e) {
					echo " ERROR: ". $e->getMessage()."\n";
			  }	
		return $recordSet;
			}   
}
?>
