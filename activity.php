<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .row.content {height:auto;} 
    }
  </style>
  <title>Lab IMK</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#">
        <img src="https://www.sascleanindonesia.com/wp-content/uploads/2015/10/logo-usu.png" alt="logo" style="width:80px;">Lab IMK
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="activity.php">Activity</a>
        </li> 
        <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
        </li>   
        </ul>
    </div>  
</nav>

<div class="jumbotron text-center" style="margin-bottom:0">
    <br/>
    <br/>
    <h1>Activity</h1>
</div>

<div class="container mt-3" style="margin-top: 100px">
    <br/>
    <br/>
    <h2>Search Data</h2> 
    <br/>

    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <center>

    <br/>
     <a href="input.php" class="btn btn-primary">Tambah</a>
    <br/>
    <br/>

        <div class="table-responsive">
            <table cellpadding="8"  class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th align="center" colspan="1">ID Catatan</th>
                    <th align="center" colspan="1">Author</th>
                    <th align="center" colspan="1">Tanggal</th>
                    <th align="center" colspan="1">Judul</th>
                    <th align="center" colspan="1">Catatan</th>
                    <th align="center" colspan="1">Pilihan</th>
                </tr>
            </thead>
            <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"SELECT * FROM db_imk");
                while($d = mysqli_fetch_array($data)){
            ?>
            <tbody id="myTable">
                <tr>
                    <td><?php echo $d['Id_catatan']; ?></td>
                    <td><?php echo $d['Author']; ?></td>
                    <td><?php echo $d['Tanggal']; ?></td>
                    <td><?php echo $d['Judul']; ?></td>
                    <td><?php echo $d['Catatan']; ?></td>
                    <td>
                <a href="update.php?id_catatan=<?php echo $d['Id_catatan']; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit</a>
                <a href="delete.php?id_catatan=<?php echo $d['Id_catatan']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-danger btn-lg active" role="button" aria-pressed="true">HAPUS </a>
                    </td>
                </tr>
            <?php
            }
            ?>
                </tbody>
            </table>
        </div>
    </center>
</div>

<footer class="container-fluid text-center">
    <p>Copyright &copy; 2020</p>
</footer>

</body>
</html>