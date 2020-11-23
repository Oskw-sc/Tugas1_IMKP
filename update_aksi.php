<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_catatan = $_POST['diary-id'];
$author = $_POST['diary-author'];
$title = $_POST['diary-title'];
$content = $_POST['diary-content'];

//update data ke database
$data= mysqli_query($koneksi,"UPDATE diary_aktivitas SET id = '$id_catatan', author = '$author', date_add=NOW(), title= '$title', content='$content' WHERE id = '$id_catatan'");

//mengalihkan halaman kembali ke activity.php
header("location:index.php");

?>