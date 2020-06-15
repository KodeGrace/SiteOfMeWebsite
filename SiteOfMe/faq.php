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
    <div class="jumbotron">
        <h1 class="display-4">Frequently Asked Question (FAQ)</h1>
        <p class="lead">Silahkan bertanya, berkomentar atau memilih salah satunya untuk membantu kami dalam pengembangan website ini. Bagi kalian yang kesulitan dalam menggunakan website ini,
        silahkan membaca FAQ kami agar kalian dapat terbantu dengan jawaban yang telah disediakan. <span><b>Tetaplah Menulis dan Membaca</b></span>.  Terima kasih</p>
        <hr class="my-4">
    </div>

    <!-- Laman Tanya Jawab -->
    <div class="media">
      <img class="mr-3" src="img/tanya.png" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0">Sumbang Tulisan</h5>
        Apakah saya bisa mendaftarkan Puisi saya disini?

        <div class="media mt-3">
          <a class="pr-3" href="#">
            <img src="img/jawab.png" alt="Generic placeholder image">
          </a>
          <div class="media-body">
            <h5 class="mt-0">Jawaban Sumbang Tulisan</h5>
            Tentu bisa! Silahkan daftarkan dirimu kepada kami, maka kamu boleh mendaftarkan hasil tulisanmu disini
          </div>
        </div>
      </div>
    </div>
    <div class="media">
      <img class="mr-3" src="img/tanya.png" alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0">Baca Tulisan</h5>
        Jika saya hanya ingin membaca tulisan disini, perlukah saya menjadi anggota?

        <div class="media mt-3">
          <a class="pr-3" href="#">
            <img src="img/jawab.png" alt="Generic placeholder image">
          </a>
          <div class="media-body">
            <h5 class="mt-0">Jawaban Baca Tulisan</h5>
            Sebagai pembaca, kalian diberi akses untuk membaca seluruh tulisan disini. Tapi, jika ingin menyumbangkan tulisan karya kalian, kalian bisa menjadi anggota kami
          </div>
        </div>
      </div>
    </div>
    <br>
    <hr class="my-4">
    <div>
      <center><h5>Ingin bertanya pada kami? Silahkan isi form dibawah ini ya</h5></center>
    </div>
    <div>
      <form action="tambah_aksi.php" method="POST">
      <div class="col-sm">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Isi dengan email aktif" required="" autofocus="">
        </div>
        <br>
        <h5>Silahkan isi salah satu</h5>
        <div class="form-group">
          <label for="pertanyaan">Pertanyaan</label>
          <input type="text" class="form-control" id="pertanyaan" name="pertanyaan" placeholder="Jika tidak ada pertanyaan isi dengan 'No Question'" required="">
        </div>
        <div class="form-group">
          <label for="komentar">Komentar</label>
          <input type="text" class="form-control" id="komentar" name="komentar" placeholder="Jika tidak ada komentar isi dengan 'No Comment'" required="">
        </div>
        <button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
      </form> 
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