<?php


class AccesoDatos{
	// Valores de la base de datos actual.
	// Nota: Se deben cambiar cuando 
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'login';
 	private $conexion = null; 


 	function getConexion() {
 		return $this->conexion;
 	}

 	function conectar() {
		try {
			$this->conexion = new mysqli($this->hostname, 
				$this->username, $this->password, $this->database);
		} catch (PDOException $e) {
			die('Connection Failed: ' . $e->getMessage());
		}
 		return $this->conexion;
 	}

 	function desconectar(){
		if ($this->conexion != null){
			mysqli_close($this->conexion);
			$this->conexion = null;
		}
 		return $this->conexion;
	}
}

?>