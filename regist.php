<?php
	$login = filter_var(trim($_POST['email']),FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

	$pass = md5($pass."ghjsfkld2345");

	$mysql = new mysqli('localhost','root','','myproject');
	$mysql->query("INSERT INTO `users` (`login`,`pass`,`name`) VALUES ('$login','$pass','$name')");
	$mysql->close();

	header('Location: /signin.php');
?>