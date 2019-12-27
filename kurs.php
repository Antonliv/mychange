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
<form action="kurs.php" method="get">
	<h3> Долар(Купівля)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["bd1"])):?>
			<input type="text" class="form-control" name="bd1" id="address2" placeholder="1$">
			<?php else: ?>
			<input type="text" class="form-control" name="bd1" id="address2" placeholder="<?php echo$_GET["bd1"]?>$">
			<?php endif;?>
		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["bd1"])):?>
			<input type="text" class="form-control" name="bd2"id="address2" placeholder="23.23&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="bd2"id="address2" placeholder="<?php echo($_GET["bd1"]*23.23)?>&#8372">
			<?php endif;?>
		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
	<h3>Долар(Продаж)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["sd1"])):?>
			<input type="text" class="form-control" name="sd1" id="address2" placeholder="1$">
			<?php else: ?>
			<input type="text" class="form-control" name="sd1" id="address2" placeholder="<?php echo$_GET["sd1"]?>$">
			<?php endif;?>
		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["sd1"])):?>
			<input type="text" class="form-control" name="sd2"id="address2" placeholder="23.27&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="sd2"id="address2" placeholder="<?php echo($_GET["sd1"]*23.27)?>&#8372">
			<?php endif;?>
		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
	<h3>Євро(Купівля)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["be1"])):?>
			<input type="text" class="form-control" name="be1" id="address2" placeholder="1€">
			<?php else: ?>
			<input type="text" class="form-control" name="be1" id="address2" placeholder="<?php echo($_GET["be1"])?>€">
			<?php endif;?>
		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["be1"])):?>
			<input type="text" class="form-control" name="be2" id="address2" placeholder="25.80&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="be2" id="address2" placeholder="<?php echo($_GET["be1"]*25.80)?>&#8372">
			<?php endif;?>
		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
	<h3>Євро(Продаж)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["se1"])):?>
			<input type="text" class="form-control" name="se1" id="address2" placeholder="1€">
			<?php else: ?>
			<input type="text" class="form-control" name="se1" id="address2" placeholder="<?php echo($_GET["se1"])?>€">
			<?php endif;?>
		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["se1"])):?>
			<input type="text" class="form-control" name="se2" id="address2" placeholder="25.89&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="se2" id="address2" placeholder="<?php echo($_GET["se1"]*25.89)?>&#8372">
			<?php endif;?>
		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
	<h3>Форінти(Купівля)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["bft1"])):?>
			<input type="text" class="form-control" name="bft1" id="address2" placeholder="100Ft">
			<?php else: ?>
			<input type="text" class="form-control" name="bft1" id="address2" placeholder="<?php echo($_GET["bft1"])?>&#8372">
			<?php endif;?>

		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["bft1"])):?>
			<input type="text" class="form-control" name="bft2" id="address2" placeholder="7.00&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="bft2" id="address2" placeholder="<?php echo($_GET["bft1"]*0.07)?>&#8372">	
			<?php endif;?>

		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
	<h3>Форінти(Продаж)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["sft1"])):?>
			<input type="text" class="form-control" name="sft1" id="address2" placeholder="100Ft">
			<?php else: ?>
			<input type="text" class="form-control" name="sft1" id="address2" placeholder="<?php echo($_GET["sft1"])?>Ft">
			<?php endif;?>

		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["sft1"])):?>
			<input type="text" class="form-control" name="sft2" id="address2" placeholder="8.00&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="sft2" id="address2" placeholder="<?php echo($_GET["sft1"]*0.08)?>&#8372">
			<?php endif;?>

		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
	<h3>Злоті(Купівля)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["bzl1"])):?>
			<input type="text" class="form-control" name="bzl1" id="address2" placeholder="1z&#x142">
			<?php else: ?>
			<input type="text" class="form-control" name="bzl1" id="address2" placeholder="<?php echo($_GET["bzl1"])?>z&#x142">
			<?php endif;?>

		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["bzl1"])):?>
			<input type="text" class="form-control" name="bzl2" id="address2" placeholder="5.80&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="bzl2" id="address2" placeholder="<?php echo($_GET["bzl1"]*5.8)?>&#8372">
			<?php endif;?>
		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
	<h3>Злоті(Продаж)</h3>
	<div class="d-flex flex-wrap">
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["szl1"])):?>
			<input type="text" class="form-control" name="szl1" id="address2" placeholder="1z&#x142">
			<?php else: ?>
			<input type="text" class="form-control" name="szl1" id="address2" placeholder="<?php echo($_GET["szl1"])?>z&#x142">
			<?php endif;?>

		</div>
			<h4> = </h4>
		<div class="col-md-2 mb-3">
			<?php if(empty($_GET["szl1"])):?>
			<input type="text" class="form-control" name="szl2" id="address2" placeholder="6.15&#8372">
			<?php else: ?>
			<input type="text" class="form-control" name="szl2" id="address2" placeholder="<?php echo($_GET["szl1"]*6.15)?>&#8372">
			<?php endif;?>

		</div>
		<div class="col-md-2 mb-3">
			<button class="btn btn-block btn-outline-primary" type="submit">Розрахувати</button>
		</div>
	</div>
</form>
</div>

<?php require "done/footer.php"?>
  
</body>
</html>