<?php 
	include("connection.php");
	include("functions.php");

	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$phone = $_POST['phone'];

		if(!empty($email) && !empty($password) && !empty($name) && !empty($phone))
		{
			$query = "INSERT INTO users (email, password, name, phone) VALUES ('$email', '$password', '$name', '$phone')";

			mysqli_query($connection, $query);

			header("Location: login.php");
			die;
		}
		else
		{
			print('
				<div id="error-notification">
					<span id="notification-text">All fields are required</span>
				</div>
			');
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>

		<link rel="stylesheet" href="style.css">
	</head>
	<body>
	<header>
			<a id="navigation" href="login.php">
				<span>Log In</span>
			</a>
		</header>
		<main>
			<div class="main">
				<div class="main-content">
					<form method="POST">
						<h1 class="main-title">Register</h1>
						<br>
						<br>
						<input type="email" name="email" placeholder="Enter email">
						<br>
						<br>
						<input type="password" name="password" placeholder="Enter password">
						<br>
						<br>
						<input type="text" name="name" placeholder="Enter name">
						<br>
						<br>
						<input type="tel" name="phone" placeholder="Enter phone">
						<br>
						<br>
						<input id="button" type="submit" value="Register">
					</form>
				</div>
			</div>
		</main>
		<footer>
        	<span>Earl Dahildahil &copy; 2022 </span>
    	</footer>
	</body>
</html>