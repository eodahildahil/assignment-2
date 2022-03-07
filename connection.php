<?php

$db_host = "localhost";
$db_username = "root";
$db_password = "123qwe";
$db_name = "assignment2";

if(!$connection = mysqli_connect($db_host, $db_username, $db_password, $db_name))
{
	die("Unable to connect to database.");
}

?>