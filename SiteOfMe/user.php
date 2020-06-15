<?php
    session_start();

    if (!isset($_SESSION["username"])) {
        echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
        exit;
    }

    $level=$_SESSION["level"];

    if ($level != 2) {
        echo "Anda tidak punya akses pada halaman penjual";
        exit;
    }

    $id = $_SESSION["id"];
    $name = $_SESSION["name"];
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];
?>
<!DOCTYPE html>
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

    <!-- Form untuk anggota menyumbangkan tulisan -->
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang!</h1>
        <p class="lead">Laman ini ditunjukkan untuk anggota kami yang ingin menyumbangkan tulisannya. Baik itu Artikel, Puisi, Pantun, dan Quotes.
        Tulisanmu juga akan kami edit agar kemungkinan duplikasi dapat dikurangi. Karena kami mementingkan karya orisinil bukan plagiasi, tapi tenang saja
        tulisanmu akan tetap membawa karakter tulisan yang kamu buat. <i>So,</i> jangan khawatir ya.</p>
        <hr class="my-4">
    </div>
    <div>
        <form action="karya.php" method="POST">
        <div class="col-sm">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Isi dengan username yang terdaftar" required="" autofocus="">
            </div>
            <div class="form-group">
                <label for="kategori">Jenis Tulisan (Kategori)</label> <br>
                <select name="kategori" id="kategori" class="form-control">
                    <option value="artikel">Artikel</option>
                    <option value="puisi">Puisi</option>
                    <option value="pantun">Pantun</option>
                    <option value="quotes">Quotes</option>
                </select>
            </div>
            <div class="form-group">
                <label for="karyanya">Tulis Karyamu di sini</label> <br>
                <textarea class="form-control" name="karyanya" id="karyanya" rows="10" placeholder="Silahkan berkreasi" required=""></textarea> <br>
            </div>
            <input type="submit" class="btn btn-primary" id="sumbangan" name="Kirim" value="Kirim">
        </form>
    </div> <br>
    <center><a href="logout.php" class="btn btn-warning" role="button">Logout</a></center>

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