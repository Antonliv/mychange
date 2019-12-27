<?php
	$answr = $_POST['answr'];
	if($answr==1)
		header('Location: /createnolimit.php');
	else
		header('Location: /createcertain.php');
?>