<?php
	$mail = filter_var(trim($_POST['mail']),FILTER_SANITIZE_STRING);
	$name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
	$phone = filter_var(trim($_POST['phone']),FILTER_SANITIZE_STRING);
	if(empty($phone))
		$phone = "";
	$city = filter_var(trim($_POST['city']),FILTER_SANITIZE_STRING);
	$dollar = $_POST['dollar'];
	$euro = $_POST['euro'];
	$zloti = $_POST['zloti'];
	$forint = $_POST['forint'];
	if(empty($dollar) AND empty($euro) AND empty($zloti) AND empty($forint))
	{
		echo "Ви не задали ні одного вашого курсу";
		exit();
	}
	if(empty($dollar))
		$dollar = 0;
	if(empty($euro))
		$euro = 0;
	if(empty($zloti))
		$zloti = 0;
	if(empty($forint))
		$forint = 0;

	$mysql = new mysqli('localhost','root','','myproject');
	$mysql->query("INSERT INTO `exchanger` (`mail`,`name`,`phone`,`city`,`dollar`,`euro`,`zloti`,`forint`) VALUES ('$mail','$name','$phone','$city','$dollar','$euro','$zloti','$forint')");
	$mysql->close();

	header('Location: /');
?>