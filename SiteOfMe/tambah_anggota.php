<!-- script untuk registrasi -->
<?php
    //Include file koneksi ke database
    include "db_connect.php";

    //menerima nilai dari kiriman form pendaftaran
    $name = $_POST["name"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]); //untuk password digunakan enkripsi md5


    //Query input menginput data kedalam tabel anggota
    $sql = "INSERT INTO tb_user (name,username,email,password) VALUES ('$name','$username','$email','$password')";

    //Mengeksekusi/menjalankan query diatas	
    $hasil = mysqli_query($koneksi, $sql);

    //Kondisi apakah berhasil atau tidak
    if ($hasil) {
        header("location:login.php");
        exit;
    }
    else {
        echo "Gagal simpan data anggota";
        exit;
    }  
?>