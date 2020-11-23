<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$author = $_POST['diary-author'];
$title = $_POST['diary-title'];
$content = $_POST['diary-content'];

//menginput data ke database
mysqli_query($koneksi, "INSERT INTO diary_aktivitas VALUE('', '$author', NOW(), NULL, '$title','$content')");

//mengalihkan halaman kembali ke activity.php
header("location:index.php");
?>

