<?php 
// koneksi database
include 'db_connect.php';

// menangkap data yang di kirim dari form Sumbang Tulisan
$username = $_POST['username'];
$kategori = $_POST['kategori'];
$karyanya = $_POST['karyanya'];
$tanggal  = date("Y-m-d");

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_karya VALUES('','$username','$kategori','$karyanya','$tanggal')");

// mengalihkan halaman kembali ke sumbang.php
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Selamat! Karyamu sedang dalam proses upload. Silahkan tunggu, tim kami akan mengelola karya Anda. 
                </div>";

header("location:logout.php");

?>