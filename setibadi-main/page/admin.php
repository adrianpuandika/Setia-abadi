<?php require_once 'session.php'; require_once 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT. SETIA ABADI</title>

    

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap2.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">PT. SETIA ABADI</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Logout</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="admin.php">
              <span data-feather="file"></span>
              Post
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              <span data-feather="layers"></span>
              User
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Post</h1>
        <a class="btn btn-sm btn-primary" href="new.php">
              <span data-feather="plus"></span> 
              New Post
        </a>
      </div>

      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Judul</th>
              <th scope="col">Kategori</th>
              <th scope="col">Waktu Post</th>
              <th scope="col">Fungsi</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $query = "SELECT * FROM post WHERE user_id=:user_id";
          $statement = $connect->prepare($query);
          $statement->execute(
              array(
                  'user_id'     =>     $_SESSION['user_id']
              )
          );

          $i = 1;
          while ($row = $statement->fetch(PDO::FETCH_ASSOC))
          {
          ?>
              <tr>
                  <td style="vertical-align: middle;"><?=$i?></td>
                  <td style="vertical-align: middle;"><?=$row['judul']?></td>
                  <td style="vertical-align: middle;"><?=$row['kategori']?></td>
                  <td style="vertical-align: middle;"><?=$row['created_at']?></td>
                  <td style="vertical-align: middle;">
                      <a class="btn btn-sm btn-warning" href="detail.php?id=<?=$row['id']?>">Detail</a>
                      <a class="btn btn-sm btn-primary" href="edit.php?id=<?=$row['id']?>">Edit</a>
                      <a onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-sm btn-danger" href="delete_post.php?id=<?=$row['id']?>">Delete</a>
                  </td>
              </tr>
          <?php
              $i++;
          }
          ?>
          </tbody>
        </table>
      </div>
      <br><br><br>
      <footer class="blog-footer" style="position: absolute;bottom: 0; left: 250px;">
      <p>&copy; Copyright by 18111385_Adrian Puandika_TIFK 20 CID_UASWEB1</p>
    </footer>
    </main>
  </div>
</div>


    <script src="../js/bootstrap.bundle.min.js" ></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
     <script src="../js/dashboard.js"></script>
    
  </body>
</html>
