<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>MyChange</title>
</head>
<body>

<?php require "done/header.php"?>

<div class="container mt-4">
	<?php
	try {
	    $conn = new PDO('mysql:host=localhost; dbname=myproject', 'root', '');
	    $id = $_GET['id'];
	    $sql = "SELECT * FROM exchanger WHERE id = $id";
	    $query = $conn->query($sql);

	    while($row = $query->fetch())
	    {
	    $name = $row["name"];
	    $dollar = $row["dollar"];
	    $euro = $row["euro"];
	    $forint = $row["forint"];
	    $zloti = $row["zloti"];
		$city = $row["city"];
		$phone = $row["phone"];
		$mail = $row["mail"];
?>
	<h1 class="font-italic ">Курс:</h3>
	<h3 class="border-top">1$ -> <?php if($dollar>0) echo $dollar."&#8372"; else echo"не продає"?></h3>
	<h3>1€ -> <?php if($euro>0) echo $euro."&#8372"; else echo"не продає"?></h3>
	<h3>1z&#x142 -> <?php if($zloti>0) echo $zloti."&#8372"; else echo"не продає"?></h3>
	<h3>100ft -> <?php if($forint>0) echo $forint."&#8372"; else echo"не продає"?></h3>
	<h1 class="font-italic border-bottom">Контактні данні:</h3>
	<h3>Ім'я: <?php echo $name?></h3>
	<h3>Адреса: <?php echo $city?></h3>
	<h3>Пошта: <?php echo $mail?></h3>
	<?php if($phone!=""): ?>
	<h3>Телефон: <?php echo $phone?></h3>
	<?php endif; ?>
<?php
	}
}
	catch (PDOException $e) {
	    echo "error".$e->getMessage();
	}
?>
</div>

<?php require "done/footer.php"?>
  
</body>
</html>