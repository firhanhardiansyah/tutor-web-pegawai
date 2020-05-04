<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/open-iconic/font/css/open-iconic-bootstrap.css">
</head>
<body class="h-100 bg-info d-flex align-items-center">

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 mx-auto bg-light p-4">
        <h3 class="text-center text-info pb-3 mb-3 border-bottom">
          Log In Aplikasi
        </h3>
        <form action="cek_login.php" method="post">
          <input type="text" name="username" placeholder="Username" id="" class="form-control form-control-lg mb-3">
          <input type="password" name="password" placeholder="Password" id="" class="form-control form-control-lg mb-3">
          <input type="submit" value="Log In" class="btn btn-info btn-lg btn-block">
        </form>
      </div>
    </div>
  </div>
  
  <script src="assets/js/jquery_3_4_1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>