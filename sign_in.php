<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/avatar.svg">
	<title>Sign in</title>
</head>

<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="post" action="" class="form-sign">
				<h1 class="title">SIGN IN</h1>
				<img src="img/avatar.svg">
				<h2 class="title">WELCOME</h2>
				<?php
				include "controlador/Sign_in.php"; 
				if(isset($_GET['error'])) {
					$msg_error = "";
					switch ($_GET['error']) {
						case 'name': 
							$msg_error = "Name enable";
							break;
						case 'password': 
							$msg_error = "Incorrect password confirmation"; 
							break;
						default:
							$msg_error = "ERROR WITH THE INPUT DATA"; 
							break;
					}
				?>
					<h3><?php echo strtoupper($msg_error); ?></h3>
				<?php } ?>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>USER NAME</h5>
						<input id="usuario" type="text" class="input" name="userName" required>
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>PASSWORD</h5>
						<input type="password" id="password" class="input" name="password" required>
					</div>
				</div>
				<div class="view">
					<div class="fas fa-eye viewPassword" onclick="view()" id="viewPassword"></div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>CONFIRM PASSWORD</h5>
						<input type="password" id="confirm_password" class="input" name="confirm_password" required>
					</div>
				</div>
				<div class="text-center">
					<a class="font-italic isai5" href="login.php">Login</a>
				</div>
				<input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
			</form>
		</div>
	</div>
	<script src="js/fontawesome.js"></script>
	<script src="js/main.js"></script>
	<script src="js/main2.js?v=11"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/bootstrap.bundle.js"></script>
</body>
</html>