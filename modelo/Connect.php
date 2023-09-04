<?php


class Connect {
	// Valores de la base de datos actual.
	// Nota: Se deben cambiar cuando 
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'login';
 	private $connection = null; 


 	function getConnection() {
 		return $this->connection;
 	}

 	function connection () {
		try {
			$this->connection = new mysqli($this->hostname, 
				$this->username, $this->password, $this->database);
		} catch (PDOException $e) {
			die('Connection Failed: ' . $e->getMessage());
		}
 		return $this->connection;
 	}

 	function desconectar(){
		if ($this->connection != null){
			mysqli_close($this->connection);
			$this->connection = null;
		}
 		return $this->connection;
	}
}

?>