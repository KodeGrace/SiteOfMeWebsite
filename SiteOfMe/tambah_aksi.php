<?php 
// koneksi database
include 'db_connect.php';

// menangkap data yang di kirim dari form Sumbang Tulisan
$email = $_POST['email'];
$pertanyaan = $_POST['pertanyaan'];
$komentar = $_POST['komentar'];

// menginput data ke database
mysqli_query($koneksi,"INSERT INTO tb_faq VALUES('','$email','$pertanyaan','$komentar')");

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>