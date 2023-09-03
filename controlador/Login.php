<?php 
session_start();
if(isset($_POST['btningresar'])) {
	include("modelo/Conexion.php");
	$conexion = new AccesoDatos();
	$conn = $conexion->conectar();
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$query = "Select * from usuario Where nombre = '$userName' AND password = '$password';";
	$sql = $conn->query($query);
	//$conn = $conexion->desconectar();

	if ($obj = $sql->fetch_object()) {
		include("modelo/Usuario.php");
		$usuario = new Usuario();
		$usuario->setId($obj->id);
		$usuario->setNombre($obj->nombre);
		$usuario->setPassword($obj->password);
		$_SESSION['usuario'] = serialize($usuario);
		header("Location: index.php");
	}
	else {
		header("Location: login.php?error=true");
	}

}

?>