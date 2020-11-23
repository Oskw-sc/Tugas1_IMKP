<?php
//koneksi database
include 'koneksi.php';
session_start();

// menangkap data id yang di kirim dari url
$id_catatan = $_GET['id'];


// menghapus data dari database
$data = mysqli_query($koneksi, "DELETE FROM diary_aktivitas WHERE id=$id_catatan");

$_SESSION['success-delete'] = true;

// mengalihkan halaman kembali ke activity.php
header("location:index.php");

?>