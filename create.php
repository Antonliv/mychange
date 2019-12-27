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
	<h1 class="h3 mb-3 font-weight-normal mt-5">Ви хочете створити постійну пропозицію(обмінник) чи тимчасову(зустріч)</h1>
	<form class="form-signin" action="checkcrt.php" method="post">
		<div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="nolimit" name="answr" type="radio" class="custom-control-input" required="" value="1">
            <label class="custom-control-label" for="nolimit">Постійна</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="certain" name="answr" type="radio" class="custom-control-input" required="" value="2">
            <label class="custom-control-label" for="certain">Тимчасова</label>
          </div>
        </div>
          <button class="mt-3 btn btn-lg btn-primary btn-block" type="submit">Продовжити</button>
	</form>
</div>

<?php require "done/footer.php"?>
  
</body>
</html>