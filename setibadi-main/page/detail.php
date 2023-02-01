<?php
require_once 'session.php'; require_once 'koneksi.php';

$data = null;
if (!isset($_GET['id'])) {
    header('location:admin.php');
} else {
    $query = "SELECT * FROM post WHERE id=:id";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            'id' => $_GET['id']
        )
    );

    $count = $statement->rowCount();
    if($count > 0)
    {
        $data = $statement->fetch();
    } else {
        header('location:admin.php');
    }
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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <!-- <a class="text-muted" href="../index.php">Logout</a> -->
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">PT. SETIA ABADI</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="btn btn-sm btn-outline-secondary" href="login.php">Log In</a> &nbsp;&nbsp;
        <a class="btn btn-sm btn-outline-secondary" href="register.php">Register</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
      <a class="p-2 text-muted" href="#"></a>
      <a class="p-2 text-muted" href="#"></a>
      <a class="p-2 text-muted" href="#"></a>
      <a class="p-2 text-muted" href="../index.php">Home</a>
      <a class="p-2 text-muted" href="detail_nologin.php">About</a>
      <a class="p-2 text-muted" href="detail3_nologin.php">Programs</a>
      <a class="p-2 text-muted" href="detail2_nologin.php">Insight</a>
      <a class="p-2 text-muted" href="contact.php">Contact</a>
      <a class="p-2 text-muted" href="#"></a>
      <a class="p-2 text-muted" href="#"></a>
      <a class="p-2 text-muted" href="#"></a>
    </nav>
  </div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        Detail Post
      </h3>

      <div class="blog-post">
        <h2 class="blog-post-title"><?=$data['judul']?></h2>
        <p class="blog-post-meta"><?=$data['created_at']?></p>

        <p style="text-align: justify;"><?=$data['konten']?></p>
      </div><!-- /.blog-post -->
    </div><!-- /.blog-main -->

    <aside class="col-md-4 blog-sidebar">
      <div class="p-4 mb-3 bg-light rounded">
        <h4 class="font-italic">About</h4>
        <p class="mb-0">Sejak tahun 1995, PT. Setia Abadi menjadi pelopor perkembangan industri batu bata di indonesia.</p>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Archives</h4>
        <ol class="list-unstyled mb-0">
          <li><a href="#">March 2019</a></li>
          <li><a href="#">February 2020</a></li>
          <li><a href="#">January 2020</a></li>
          <li><a href="#">December 2020</a></li>
          <li><a href="#">November 2020</a></li>
          <li><a href="#">October 2020</a></li>
          <li><a href="#">September 2020</a></li>
          <li><a href="#">August 2021</a></li>
          <li><a href="#">July 2021</a></li>
          <li><a href="#">June 2021</a></li>
          <li><a href="#">May 2021</a></li>
          <li><a href="#">April 2021</a></li>
        </ol>
      </div>

      <div class="p-4">
        <h4 class="font-italic">Elsewhere</h4>
        <ol class="list-unstyled">
          <li><a href="#">GitHub</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Facebook</a></li>
        </ol>
      </div>
    </aside><!-- /.blog-sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>&copy; Copyright by 18111385_Adrian Puandika_TIFK 20 CID_UASWEB1</p>
</footer>
</body>
</html>
