<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/avatar.svg">
	<title>Login</title>
</head>

<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post" action="" class="form-sign">
				<h1 class="title">LOGIN</h1>
				<img src="img/avatar.svg">
				<h2 class="title">WELCOME</h2>
				<?php 
				include "controlador/Login.php"; 
				if(isset($_GET['error'])) {
				?>
				<h3>ERROR WITH THE INPUT DATA</h3>
				<?php } ?>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>User Name</h5>
						<input id="usuario" type="text" class="input" name="userName" required>
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" id="input" class="input" name="password" required>
					</div>
				</div>
				<div class="view">
					<div class="fas fa-eye viewPassword" onclick="view()" id="viewPassword"></div>
				</div>

				<div class="text-center">
					<a class="font-italic isai5" href="sign_in.php">Sign in</a>
				</div>
				<input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
			</form>
		</div>
	</div>
	<script src="js/fontawesome.js"></script>
	<script src="js/main.js"></script>
	<script src="js/main2.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
</body>

</html>