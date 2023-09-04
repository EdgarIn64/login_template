<?php  

class User {
	protected $id;
	protected $name;
	protected $password;

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = $id;
	}

	function getName() {
		return $this->name;
	}

	function setName($name) {
		$this->name = $name;
	}

	function getPassword() {
		return $this->password;
	}

	function setPassword($password) {
		$this->password = $password;
	}
}

?>