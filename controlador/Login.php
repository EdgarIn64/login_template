<?php 
session_start();
if(isset($_POST['btningresar'])) {
	include("modelo/Connect.php");
	$connection = new Connect();
	$conn = $connection->connection();
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$query = "Select * from usuario Where nombre = '$userName' AND password = '$password';";
	$sql = $conn->query($query);
	$conn = $connection->desconectar();

	if ($obj = $sql->fetch_object()) {
		include("modelo/User.php");
		$user = new User();
		$user->setId($obj->id);
		$user->setName($obj->nombre);
		$user->setPassword($obj->password);
		$_SESSION['user'] = serialize($user);
		header("Location: index.php");
	}
	else {
		header("Location: login.php?error=true");
	}

}

?>