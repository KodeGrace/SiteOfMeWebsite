<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link href='img/logo.png' rel='shortcut icon'>

        <title>Site Of Me</title>
    </head>
    <body>
        <div class="container">
            <?php
            //Include file koneksi, untuk koneksikan ke database
            include "db_connect.php";

            //Fungsi untuk mencegah inputan karakter yang tidak sesuai
            function input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_anggota
            if (isset($_GET['id_anggota'])) {
                $id_anggota = input($_GET["id_anggota"]);

                $sql = "SELECT * FROM tb_anggota WHERE id_anggota = $id_anggota";
                $hasil = mysqli_query($koneksi,$sql);
                $data = mysqli_fetch_assoc($hasil);
            }

            //Cek apakah ada kiriman form dari method post
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $id_anggota = htmlspecialchars($_POST["id_anggota"]);
                $username = input($_POST["username"]);
                $name = input($_POST["name"]);
                $email = input($_POST["email"]);

                //Query update data pada tabel anggota
                $sql = "UPDATE tb_anggota SET username='$username', name='$name', email='$email' WHERE id_anggota = $id_anggota";

                //Mengeksekusi atau menjalankan query diatas
                $hasil=mysqli_query($koneksi, $sql);

                //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
                if ($hasil) {
                    header("Location:index_admin.php");
                }
                else {
                    echo "<div class='alert alert-danger'> Data Gagal diupdate.</div>";
                }
            }
            ?>

            <div class="jumbotron">
                <h1 class="display-4">Halaman Admin</h1>
                <p class="lead">Halaman ini untuk memantau user yang terdaftar sebagai anggota Site Of Me</p>
                <hr class="my-4">
            </div>

            <h2> <center> Update Data Anggota </center> </h2>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>" placeholder="Masukan Username" required />
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" value="<?php echo $data['name']; ?>" placeholder="Masukan Nama" required/>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?php echo $data['email']; ?>" placeholder="Masukan Email" required/>
                </div>

                <input type="hidden" name="id_anggota" value="<?php echo $data['id_anggota']; ?>" />
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
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