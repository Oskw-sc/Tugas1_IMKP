<?php 
  error_reporting(0);
  include 'koneksi.php'; 
  session_start();
  $_SESSION['success-add'] ?: false;
  $_SESSION['success-edit'] ?: false;
  $_SESSION['success-delete'] ?: false;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Plugins -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="assets/style.css">
  <title>Diary Aktivitas</title>
</head>
<body>
  <nav class="navbar bg-light navbar-light px-3">
      <a class="navbar-brand p-2" href="index.php">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Logo_of_North_Sumatra_University.svg/1024px-Logo_of_North_Sumatra_University.svg.png" alt="logo USU" width="60" height="60">
        <span class="h2 align-middle ml-2 text-success strong-fontsize">Diary Mahasiswa</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end py-2" id="collapsibleNavbar">
        <h4 class="text-muted light-fontsize">Di sini, Anda dapat berbagi cerita!!!</h4>
        <h5>Cerita apa?? Cerita tentang kehidupan perkuliahan Anda-anda sebagai mahasiswa USU.</h5>
      </div>  
    </nav>