<?php
  $_GET['id'] ?: header("location:index.php");
  $id = $_GET['id'];
  include_once 'components/head.php';

  $query = mysqli_query($koneksi, "SELECT * FROM diary_aktivitas WHERE id = '$id'");
  $detail = mysqli_fetch_assoc($query);
  $detail ?: header("location:index.php");
?>
  <div class="background-wall">
    <div class="container-lg p-3 my-3 fluid-vertical">
      <div class="card p-5 border-warning">
        <h1 class="text-warning">Sunting Cerita Diary</h1>
        <hr class="border-warning">
        
        <form class="d-flex flex-column justify-content-center text-warning" autocomplete="off" method="POST" action="update_aksi.php">
          <div class="form-group">
            <label for="diary-title">ID Diary</label>
            <input type="text" class="form-control form-control-lg" id="diary-id" name="diary-id" value="<?= $detail['id']; ?>" required readonly/>
          </div>
          <div class="form-group">
            <label for="diary-title">Judul Diary</label>
            <input type="text" class="form-control form-control-lg" id="diary-title" name="diary-title" placeholder="Sunting judul menarik Anda." value="<?= $detail['title']; ?>" required />
          </div>
          <div class="form-group">
            <label for="diary-author">Nama Anda</label>
            <input type="text" class="form-control form-control-lg" id="diary-author" name="diary-author" placeholder="Sunting nama lengkap Anda." value="<?= $detail['author']; ?>" required />
          </div>
          <div class="form-group">
            <label for="diary-content">Cerita Menarik</label>
            <textarea class="form-control form-control-lg" id="diary-content" name="diary-content" rows="8" placeholder="Sunting cerita menarik Anda." required /><?= $detail['content']; ?></textarea>
          </div>
          <button type="submit" class="btn btn-outline-primary btn-lg p-3 my-2">Sunting Cerita</button>
          <a href="index.php" type="button" class="btn btn-outline-danger btn-lg p-3 my-2">Kembali</a>
        </form>
      </div>
    </div>
  </div>
<?php
  include_once 'components/foot.php';
  include_once 'components/close.php';
?>

