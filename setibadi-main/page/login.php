<?php
session_start();
$message = "";
try
{
    require_once 'koneksi.php';
    if(isset($_POST["login"]))
    {
        if(empty($_POST["username"]) || empty($_POST["password"]))
        {
            $message = '<label>Silahkan masukkan username dan password</label>';
        }
        else
        {
            $query = "SELECT * FROM user WHERE username = :username AND password = :password";
            $statement = $connect->prepare($query);
            $statement->execute(
                array(
                    'username'     =>     $_POST["username"],
                    'password'     =>     md5($_POST["password"])
                )
            );
            $count = $statement->rowCount();
            if($count > 0)
            {
                $_SESSION["username"] = $_POST["username"];
                $row = $statement->fetch();
                $_SESSION["user_id"] = $row['id'];
                header("location:admin.php");
            }
            else
            {
                $message = '<label>Username atau password salah</label>';
            }
        }
    }
}
catch(PDOException $error)
{
    $message = $error->getMessage();
}
?>
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
    <form class="form-signin" method="POST" action="login.php">
      <h1 class="h2 mb-3 font-weight-normal" style="color: gray;"><b>PT. SETIA ABADI</b></h1>
      <p style="color: gray;">Login</p>
        <?php if($message != "") {
            ?>
            <small><?=$message?></small>
            <?php
        } ?>
      <label for="username" class="sr-only">Username</label>
      <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
      <input class="btn btn-lg btn-primary btn-block" name="login" type="submit" value="Login" /><br>
      <a href="register.php" style="font-size: 8pt;color: gray;">Belum mempunyai akun ? Register disini !</a>
      <p class="mt-5 mb-3 text-muted" style="font-size: 8pt;">&copy; Copyright by 18111385_Adrian Puandika_TIFK 20 CID_UASWEB1</p>
    </form>
</body>
</html>
