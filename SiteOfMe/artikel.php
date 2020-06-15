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
            </li>>
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
        <h1 class="display-4">Artikel</h1>
        <p class="lead">Karangan yang berisi konten secara fakta namun, memiliki panjang yang dibatasi. Tujuannya menyampaikan gagasan dan fakta yang mendidik, menghibur, dan meyakinkan.</p>
        <hr class="my-4">
    </div>

    <!-- Konten bentuk Card -->
    <div class="card-group">
        <div class="card">
            <img class="card-img-top" src="img/bayam.jpeg" alt="Card image cap">
            <div class="card-body">
                <a href="#">
                    <h5 class="card-title">Artikel Kesehatan</h5>
                </a>
                <center> <b> Mengulik Kandungan Bayam yang Fresh Seperti Cita Rasanya </b></center>
                <p class="card-text">Dari sudut desa hingga hutan beton perkotaan, sayur bayam adalah primadona. Sayuran hijau superfood...</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/olahraga.jpg" alt="Card image cap">
            <div class="card-body">
                <a href="#">
                    <h5 class="card-title">Artikel Olahraga</h5>
                </a>
                <center> <b>Tipe Pelindung Lutut yang Bisa Anda Pilih Berdasarkan Fungsinya</b></center>
                <p class="card-text">Pelindung lutut dapat digunakan untuk mencegah cedera maupun mengurangi rasa nyeri akibat cedera lutut. Berikut...</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 5 mins ago</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="img/ekonomi.jpg" alt="Card image cap">
            <div class="card-body">
                <a href="#">
                    <h5 class="card-title">Artikel Ekonomi</h5>
                </a>
                <center><b>Ekonomi Indonesia</b></center>
                <p class="card-text">Indonesia adalah negara yang memiliki potensi ekonomi yang tinggi; potensi yang mulai diperhatikan dunia internasional. Indonesia...</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Last updated 7 mins ago</small>
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