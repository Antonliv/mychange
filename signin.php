<!DOCTYPE html>
<html lang="ua">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>MyChange</title>
</head>

<body class="text-center">
    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <h1 class="h3 mb-3 font-weight-normal mt-5">Реєстрація</h1>
          <form class="form-signin needs-validation was-validated" action="regist.php" method="post" novalidate="">
            <div>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="" required=""><br>
            </div>
            <div>
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="" required=""><br>
            </div>
            <div>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" value="" required=""><br>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
        <div class="col">
          <h1 class="h3 mb-3 font-weight-normal mt-5">Вхід</h1>
          <form class="form-signin needs-validation was-validated novalited" action="auth.php" method="post">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" required=""><br>
            <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" value="" required=""><br>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
      </div>
    </div>
  <p class="mt-5 mb-3 text-muted">© 2017-2019</p>
</body>
</html>