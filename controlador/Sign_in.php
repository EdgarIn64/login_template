<?php 
session_start();
if(isset($_POST['btningresar'])) {
	include("modelo/Connect.php");
	$connection = new Connect();
	$conn = $connection->connection();
	$userName = $_POST['userName'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];


	if ($password != $confirm_password) {
		header("Location: sign_in.php?error=password");
	}
	else {
		$query = "Select * from usuario Where nombre = '$userName';";
		$sql = $conn->query($query);
		if ($sql->fetch_object()) {
			header("Location: sign_in.php?error=name");
		}
		else {
			$query = "Insert into usuario Values ('', '$userName', '$password');";
			$conn->query($query);
			$conn = $connection->desconectar();
			header("Location: login.php");
		}
	}

}

?>