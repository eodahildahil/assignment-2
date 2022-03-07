<?php 
	include("connection.php");
	include("functions.php");

	session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		if(!empty($email) && !empty($password))
		{
			$query = "SELECT * FROM users WHERE email = '$email' limit 1";
			$result = mysqli_query($connection, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user = mysqli_fetch_assoc($result);
					
					if($user['password'] === $password)
					{

						$_SESSION['id'] = $user['id'];
						header("Location: index.php");
						die;
					}
				}
			}

			print('
				<div id="error-notification">
					<span id="notification-text">Invalid email/password</span>
				</div>
			');
		}
		else
		{
			print('
				<div id="error-notification">
					<span id="notification-text">Invalid email/password</span>
				</div>
			');
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>

		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<a id="navigation" href="register.php">
				<span>Register</span>
			</a>
		</header>
		<main>
			<div class="main">
				<div class="main-content">
					<form method="POST">
						<h1 class="main-title">Log In</h1>
						<br>
						<br>
						<input type="email" name="email" placeholder="Enter email">
						<br>
						<br>
						<input type="password" name="password" placeholder="Enter password">
						<br>
						<br>
						<input id="button" type="submit" value="Log In"><br><br>
					</form>
				</div>
			</div>
		</main>
		<footer>
        	<span>Earl Dahildahil &copy; 2022 </span>
    	</footer>
	</body>
</html>