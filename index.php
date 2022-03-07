<?php 
	include("connection.php");
	include("functions.php");

	session_start();

	$user = check_login($connection);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Welcome!</title>

		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<a id="navigation" href="logout.php">
				<span>Log Out</span>
			</a>
		</header>
		<main>
			<div class="main">
				<div class="main-content">
				<h1 class="main-title">Welcome back <?php echo $user['name']; ?>!</h1>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</p>
				</div>
			</div>
		</main>
		<footer>
			<span>Earl Dahildahil &copy; 2022 </span>
		</footer>
	</body>
</html>