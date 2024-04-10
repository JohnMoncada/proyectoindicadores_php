<?php

class ControlConexion{
	
<<<<<<< HEAD
	var $conn; //todos los atributos de la clase se debe usar con $this->
	function __construct(){
		$this->conn=null;
	}
	//metodo para abrir la bd, los parametros 
    function abrirBd($servidor, $usuario, $password,$db,$port){
    	try	{
			$this->conn = new mysqli($servidor, $usuario, $password, $db, $port);  //esta linea abre la bd, esto es instanciar la clase en este caso mysqli, es un objeto
=======
	var $conn;
	
	function __construct(){
		$this->conn = null;
	}

    function abrirBd($servidor, $usuario, $password, $db, $port){
    	try	{
			$this->conn = new mysqli($servidor, $usuario, $password, $db, $port);
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
			if ($this->conn->connect_errno) {
			printf("Connect failed: %s\n", $this->conn->connect_error);
			exit();
			}
      	}
      	catch (Exception $e){
          	echo "ERROR AL CONECTARSE AL SERVIDOR ".$e->getMessage()."\n";
      	}

    }
<<<<<<< HEAD
	//metodo para cerrar la bd
    function cerrarBd() {
		try{
       $this->conn->close(); //metodo para cerar la bd el close
=======

    function cerrarBd() {
		try{
       $this->conn->close();
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
		}
      	catch (Exception $e){
          	echo "ERROR AL CONECTARSE AL SERVIDOR ".$e->getMessage()."\n";
      	}		
    }
<<<<<<< HEAD
	//metodo para ejecutar la bd, se usa en 3 casos insert into, update, delete
    function ejecutarComandoSql($sql) {
    	try	{
			$this->conn->query($sql); //metodo para ejecutar metodos sql, el query
=======

    function ejecutarComandoSql($sql) {
		//Este metodo lo utilizaremos para inset into, update, delete.
    	try	{
			$this->conn->query($sql);
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
			}
		catch (Exception $e) {
				echo " NO SE AFECTARON LOS REGISTROS: ". $e->getMessage()."\n";
		  }	
		}
<<<<<<< HEAD
	//metodo para seleccionar la bd
	function ejecutarSelect($sql) {
=======

	function ejecutarSelect($sql) {
		//Select
>>>>>>> 0228b2ebf506de452616bf8edcc3b06c3eb51884
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
