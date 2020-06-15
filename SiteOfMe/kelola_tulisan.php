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
            include "db_connect.php";

            //Cek apakah ada nilai dari method GET dengan nama id
            if (isset($_GET['id'])) {
                $id = htmlspecialchars($_GET["id"]);

                $sql = "DELETE FROM tb_tulisan WHERE id = '$id' ";
                $hasil = mysqli_query($koneksi, $sql);

                //Kondisi apakah berhasil atau tidak
                    if ($hasil) {
                        header("Location:kelola_tulisan.php");
                    }
                    else {
                        echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";
                    }
                }
        ?>
        <div class="jumbotron">
            <h1 class="display-4">Halaman Admin</h1>
            <p class="lead">Halaman ini untuk memantau tulisan admin dan user yang terdaftar sebagai anggota Site Of Me</p>
            <hr class="my-4">
        </div>

        <br>
        <h4> <center> Form Tulisan Site Of Me </center></h4>
        <table class="table table-bordered table-hover">
        <br>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Kategori</th>
                    <th>Tulisan</th>
                    <th colspan='2'>Aksi</th>
                </tr>
            </thead>
            <?php
                include "db_connect.php";
                $sql = "SELECT * FROM tb_tulisan ORDER BY id DESC";

                $hasil = mysqli_query($koneksi, $sql);
                $no = 0;
                while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
            ?>
            <tbody>
                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $data["username"]; ?></td>
                    <td><?php echo $data["email"];   ?></td>
                    <td><?php echo $data["kategori"];   ?></td>
                    <td><?php echo $data["tulisan"]; ?></td>
                    <td>
                        <a href="update_tulisan.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-warning" role="button">Update</a>
                        <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $data['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
        <a href="create_tulisan.php" class="btn btn-primary" role="button">Tambah Data</a>
        
        <center><a href="index_admin.php" class="btn btn-primary" role="button">Kelola Data Anggota</a></center>
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
    </div>
    </body>
</html>