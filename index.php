<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<title>MyChange</title>
</head>
<body>

<?php require "done/header.php"?>

<div class="container mt-4">
  <h3 class="mb-5">Пропозиції:</h3>
  <div class="d-flex flex-wrap">
<?php
  try {
    $conn = new PDO("mysql:host=localhost; dbname=myproject", 'root', '');

    $sql = "SELECT * FROM meet";
    $query = $conn->query($sql);

    while($row = $query->fetch())
    {
      $id = $row["id"];
      $name = $row["name"];
      $city = $row["city"];
?>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Тимчасова(<?php echo $name?>)</h4>
        </div>
        <div class="card-body">
          <img src="img/2.jpg" class="img-thumbnail">
          <h1 class="card-title pricing-card-title"><?php echo $city?></h1>
          <form action="infocertain.php" method="get">
          <button class="btn btn-lg btn-block btn-outline-primary" type="submit" name="id" value="<?php echo $id?>">Подробиці</button>
          </form>
        </div>
      </div>
<?php
    }
}
catch (PDOException $e) {
    echo "error".$e->getMessage();
}
?>

<br>

<?php
  try {
    $conn = new PDO("mysql:host=localhost; dbname=myproject", 'root', '');

    $sql = "SELECT * FROM exchanger";
    $query = $conn->query($sql);

    while($row = $query->fetch())
    {
      $id = $row["id"];
      $name = $row["name"];
      $city = $row["city"];
?>
      <div class="card mb-4 shadow-sm">
        <div class="card-header">
          <h4 class="my-0 font-weight-normal">Постійна(<?php echo $name?>)</h4>
        </div>
        <div class="card-body">
          <img src="img/1.jpg" class="img-thumbnail">
          <h5 class="card-title pricing-card-title"><?php echo $city?></h5>
          <form class="mclas"action="infonolimit.php" method="get">
          <button class="btn btn-lg btn-block btn-outline-primary" type="submit" name="id" value="<?php echo $id?>">Подробиці</button>
          </form>
        </div>
      </div>
<?php
    }
}
catch (PDOException $e) {
    echo "error".$e->getMessage();
}
?>
</div>
</div>

<?php require "done/footer.php"?>
  
</body>
</html>