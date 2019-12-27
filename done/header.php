<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">MyChange</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="kurs.php">Курс</a>
    <a class="p-2 text-dark" href="index.php">Пропозиції</a>
    <?php
  		if($_COOKIE['user'] == 'true'):
  	?>
    <a class="p-2 text-dark" href="create.php">Створити пропозицію</a>
    <?php endif; ?>
  </nav>
  <?php
  	if($_COOKIE['user'] == 'true'):
  ?>
  <a class="btn btn-outline-primary" href="check.php">Вихід</a>
  <?php
  	else:
  ?>
  <a class="btn btn-outline-primary" href="signin.php">Вхід</a>
<?php endif; ?>
</div>