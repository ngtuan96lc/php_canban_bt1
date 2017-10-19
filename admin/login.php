<?php
	session_start();
	include_once('../config.php');
	if(isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
		$username = trim($_POST['username']);
		$password = md5(trim($_POST['password']));
		if(checkLogin($username , $password)){
			// tao session username va chuyển hướng người dùng vào trang index
			$_SESSION['username'] = $username;
			header('Location: index.php');
		}else{
			// xoa toan bộ sesion và chuyển hướng người dùng vào trang login
			session_destroy();
			header('Location: login.php');
		}
	}
	function checkLogin($username, $password){
		global $conn;
		$sql = "SELECT * FROM users where username = '{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			return true;
		} else {
			return false;
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>SB Admin - Start Bootstrap Template</title>
		<!-- Bootstrap core CSS -->
		<link href="public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom fonts for this template -->
		<link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Custom styles for this template -->
		<link href="public/css/sb-admin.css" rel="stylesheet">
	</head>
	<body class="bg-dark">
		<div class="container">
			<div class="card card-login mx-auto mt-5">
				<div class="card-header">
					Login
				</div>
				<div class="card-body">
					<form action="" method="POST">
						<div class="form-group">
							<label for="exampleInputUser">Username</label>
							<input type="text" class="form-control" id="exampleInputUser" placeholder="Enter Username"  name="username">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" name="password">
						</div>
						
						<button class="btn btn-primary btn-block" type="submit" name="submit">Login</button>
					</form>
					<div class="text-center">
						<a class="d-block small mt-3" href="register.html">Register an Account</a>
						<a class="d-block small" href="forgot-password.html">Forgot Password?</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Bootstrap core JavaScript -->
		<script src="public/vendor/jquery/jquery.min.js"></script>
		<script src="public/vendor/popper/popper.min.js"></script>
		<script src="public/vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>