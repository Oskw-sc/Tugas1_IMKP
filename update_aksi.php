<?php
//koneksi database
include 'koneksi.php';
session_start();

//menangkap data yang dikirim dari form
$id_catatan = $_POST['diary-id'];
$author = $_POST['diary-author'];
$title = $_POST['diary-title'];
$content = $_POST['diary-content'];

//update data ke database
$data= mysqli_query($koneksi,"UPDATE diary_aktivitas SET id = '$id_catatan', author = '$author', date_update = NOW(), title = '$title', content = '$content' WHERE id = '$id_catatan'");

$_SESSION['success-edit'] = true;

//mengalihkan halaman kembali ke index.php
header("location:index.php");

?>