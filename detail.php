<?php
  $_GET['id'] ?: header("location:index.php");
  $id = $_GET['id'];
  include_once 'components/head.php';

  $query = mysqli_query($koneksi, "SELECT * FROM diary_aktivitas WHERE id = '$id'");
  $detail = mysqli_fetch_assoc($query);
  $detail ?: header("location:index.php");

  $new_date = $detail['date_update'] ?: $detail['date_add'];
  $last_date = new DateTime($new_date, new DateTimeZone("Asia/Jakarta"));
  $detail['last_date'] = $last_date->format('l, d F Y');
?>
  <div class="container-lg p-3 my-3 fluid-vertical">
    <div class="card border-info">
      <div class="row no-gutters">
        <div class="col-5">
          <img src="https://wallpapercave.com/wp/wp4590354.jpg" class="w-100" alt="walpaper diary">
        </div>
        <div class="col d-flex flex-column">
            <div class="p-3 container-fluid">
              <h1 class="strong-fontsize text-center title"><?= $detail['title'] ?></h1>
              <hr class="mt-0 border-info">
              <h5 class="light-fontsize"><?= $detail['last_date']; ?></h5>
              <h5 class="light-fontsize"><?= $detail['author']; ?></h5>
              <p class="h5 mt-3 text-justify paragraph-text"><?= $detail['content']; ?></p>
            </div>
            <a href="index.php" type="button" class="btn btn-outline-info btn-lg mt-auto m-3">Kembali</a>
        </div>
      </div>
    </div>
  </div>
<?php include_once 'components/foot.php'; ?>