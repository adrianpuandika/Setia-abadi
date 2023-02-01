<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>PT. SETIA ABADI</title>
    <!-- Bootstrap core CSS -->
	  <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="../css/login.css" rel="stylesheet">
    <script type="text/javascript" src="../js/index.js"></script>
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="register_post.php">
      <h1 class="h2 mb-3 font-weight-normal" style="color: gray;"><b>PT. SETIA ABADI</b></h1>
      <p style="color: gray;">Register</p>

      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>

      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password1" class="form-control" name="password" placeholder="Password" required>

      <label for="password2" class="sr-only">Konfirmasi Password</label>
      <input type="password" id="password2" class="form-control" name="password2" placeholder="Konfirmasi Password" required>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button><br>
      <a href="login.php" style="font-size: 8pt;color: gray;">Sudah mempunyai akun ? Login disini !</a>
      <p class="mt-5 mb-3 text-muted" style="font-size: 8pt;">&copy; Copyright by 18111385_Adrian Puandika_TIFK 20 CID_UASWEB1</p>
    </form>
</body>
</html>
