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
    <!-- Dropdown -->
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
    <!-- Header pakai Jumbotron -->
    <div class="jumbotron">
        <h1 class="display-4">Pantun</h1>
        <p class="lead">Pantun pengembangan dari puisi lama yang menjadi versi pendek, seperti hanya memilik 2 baris atau 4 baris. Masyarakat Melayu umumnya telah
        mengenal pantun sejak dulu. Jenis pantun juga beragam diantaranya Pantun Nasihat, Pantun Teka-Teki, hingga Pantun Agama.</p>
        <hr class="my-4">
    </div>

    <!-- Konten bentuk Card -->
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/nasehat.webp" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Pantun Nasehat</h5>
                <p class="card-text">
                    Lampu jalan terang berpijar <br>
                    Lampu berdiri di atas papan <br>
                    Anak sekolah harus belajar <br>
                    Untuk meraih masa depan
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/tekateki.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Pantun Teka-Teki</h5>
                <p class="card-text">
                Menanam pohon di taman luas, <br>
                Taman pun indah berwarna-warni <br>
                Ia termasuk binatang buas, <br>
                Janggutnya lebat dan pemberani?
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 4 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/agama.webp" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Pantun Agama</h5>
                <p class="card-text">
                Sama-sama tetapkan iman <br>
                Supaya jangan jadi halangan <br>
                Ajal dan maut jodoh pertemuan <br>
                Semuanya itu di tangan Tuhan
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 5 mins ago</small>
            </div>
        </div>
    </div>

    <div>
        <!-- Footer -->
        <footer class="page-footer font-small blue">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
          <a href="#"> Grace - 065117004</a>
        </div>
        </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>