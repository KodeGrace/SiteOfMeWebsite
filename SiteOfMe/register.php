<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href='img/logo.png' rel='shortcut icon'>

    <title>Site Of Me</title>
  </head>
  <body>
    <!-- dropdown -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Jenis Tulisan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="artikel.php">Artikel</a>
                            <a class="dropdown-item" href="pantun.php">Pantun</a>
                            <a class="dropdown-item" href="puisi.php">Puisi</a>
                            <a class="dropdown-item" href="quotes.php">Quotes</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="sumbang.php">Sumbang Tulisan</a>
                        </div>
                    </li>
            <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQ</a>
              </li>
          </ul>
        </div>
    </nav>

    <!-- form registrasi anggota -->
    <div class="row">
        <div class="col-sm-4">
            <div class="jumbotron">
                <h1 class="display-4">Registrasi Site</h1>
                <p class="lead">Bagi kalian yang berniat menyumbangkan karya kalian silahkan gabung jadi anggota kami dengan mendaftarkan diri kalian.
                Nantinya kalian akan diberi akses oleh kami jika akun kalian sudah kami konfirmasi. Silahkan tunggu kami di emailmu ya untuk notifikasi konfirmasi akunmu</p>
                <hr class="my-4">
            </div>
        </div>
        
        <div class="col-sm-8">
            <br>
            <h2>
                Halaman Registrasi
            </h2>
            <form action="tambah_anggota.php" method="POST">
            <div class="col-sm">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required="">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                     <input type="text" class="form-control" id="username" name="username" required="">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required="">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="registrasi">Registrasi</button>
                </div>
            </form> <br>
            Sudah punya akun? Silahkan <a href="login.php">Login disini</a>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>