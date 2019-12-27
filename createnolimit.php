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
<div class="container mt-5">
	<form class="needs-validation was-validated" action="finishnolimit.php" method="post" novalidate="" >
          <div class="mb-3">
	            <label for="lastName">Введіть назву вашого обмінника</label>
	            <input type="text" class="form-control" id="lastName" name="name" required="">
	            <div class="invalid-feedback">
	              Ви не ввели назву.
	          	</div>
          </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="mail" required="">
          <div class="invalid-feedback">
            Будь ласка введіть свою пошту.
          </div>
        </div>

        <div class="mb-3">
          <label for="city">Напишіть адресу вашого обмінника</label>
          <input type="text" class="form-control" id="city" name="city" required="">
          <div class="invalid-feedback">
            Ви не написали вашу адресу.
          </div>
        </div>

        <div class="mb-3">
          <label for="phone">Напишіть номер телефону</label>
          <input type="text" class="form-control" id="phone" name="phone" >
        </div>

        <div class="mb-3">
          <label for="address">Ваш курс $(1)</label>
          <input type="number" class="form-control" name="dollar" id="address" min="1" max="50" step="0.01" >
          <div class="invalid-feedback">
            Ви ввели мале або велике значення!
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Ваш курс €(1)</label>
          <input type="number" class="form-control" name="euro" id="address" min="1" max="70" step="0.01" >
          <div class="invalid-feedback">
            Ви ввели мале або велике значення!
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Ваш курс z&#x142(1)</label>
          <input type="number" class="form-control" name="zloti" id="address" min="1" max="10000" step="0.01" >
          <div class="invalid-feedback">
            Ви ввели мале або велике значення!
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Ваш курс ft(100)</label>
          <input type="number" class="form-control" name="forint" id="address" min="1" max="50" step="0.01" >
          <div class="invalid-feedback">
            Ви ввели мале або велике значення!
          </div>
        </div>

        <button class="btn btn-primary btn-lg btn-block" type="submit">Finish</button>

      </form>
</div>

<?php require "done/footer.php"?>
  
</body>
</html>