<?php  

class Usuario {
	protected $id;
	protected $nombre;
	protected $password;

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = $id;
	}

	function getNombre() {
		return $this->nombre;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function getPassword() {
		return $this->password;
	}

	function setPassword($password) {
		$this->password = $password;
	}
}

?>