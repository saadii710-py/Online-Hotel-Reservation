<!DOCTYPE html>
<?php require_once "connect.php"?>
<html lang="en">
	<head>
		<title>Hotel Online Reservation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../css/style.css" />
		<link rel="stylesheet" href="../css/loginstyle.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand">Hotel Online Reservation</a>
					</div>
			</div>
		</nav>
		<br>
		<br>
		<br>
		<br>
		<br>
		<center>
			<br>
			<br>
			<br>
			<br>
			<div class="container">
				<br>
				<br>
				<div class="col-md-4">
					<div class="panel panel-danger">
						<div class="panel-body">
							<div class="login-box">
								<form method="POST">
									<div class="user-box">
										<input type="text" name="username" required="">
										<label>Username</label>
									</div>
									<div class="user-box">
										<input type="password" name="password" required="">
										<label>Password</label>
									</div>
									<center>
										<button type="submit" name="login">
											Login
											<span></span>
										</button>
									</center>
								</form>
								<?php require_once 'login.php'?>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</center>
		<br>
		<br>
	</body>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.js"></script>
</html>
