<?php

function check_login($connection)
{
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
		$query = "SELECT * FROM users WHERE id = '$id' LIMIT 1";

		$result = mysqli_query($connection, $query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user = mysqli_fetch_assoc($result);
			return $user;
		}
	}

	header("Location: login.php");
	die;
}

?>