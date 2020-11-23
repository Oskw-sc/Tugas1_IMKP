<?php include_once 'components/head.php'; ?>
  <div class="hero text-center text-white d-flex justify-content-center align-items-center">
    <h1 class="hero-title parisienne-font">Diary</h1>
  </div>
  
  <div class="container my-5">
    <h1 class="text-center mb-4 border-bottom border-success text-success title strong-fontsize">Daftar Diary Mahasiswa</h1>
    <table id="list-table" class="table table-hover table-bordered" style="width: 100%">
      <thead class="thead-dark text-center">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Nama Pengarang</th>
          <th scope="col">Tanggal Posting</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $list = mysqli_query($koneksi, "SELECT * FROM diary_aktivitas");
          $i = 1;
          foreach($list as $row):
        ?>
        <tr>
          <th class="align-middle text-center" scope="row"><?= $i++;?></th>
          <td class="align-middle"><?= $row['title'];?></td>
          <td class="align-middle"><?= $row['author'];?></td>
          <td class="align-middle"><?= $row['date_update'] ?? $row['date_add'];?></td>
          <td class="align-middle text-center">
            <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-outline-info" role="button" aria-pressed="true">Lihat</a>
            <a href="update.php?id=<?= $row['id']; ?>" class="btn btn-outline-warning" role="button" aria-pressed="true">Sunting</a>
            <a href="delete.php?id=<?= $row['id']; ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-outline-danger" role="button" aria-pressed="true">HAPUS </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    
    <hr class="border-success my-5">

    <h2 class="text-info text-center strong-fontsize">Saatnya... kita berbagi cerita!!!</h2>
    <h4 class="text-info text-center">Yuk, kirimkan cerita menarikmu dengan form berikut.</h4>
    <form class="d-flex flex-column justify-content-center" autocomplete="off" method="POST" action="input_aksi.php">
      <div class="form-group">
        <label for="diary-title">Judul Diary</label>
        <input type="text" class="form-control form-control-lg" id="diary-title" name="diary-title" placeholder="Masukkan judul menarik Anda." required />
      </div>
      <div class="form-group">
        <label for="diary-author">Nama Anda</label>
        <input type="text" class="form-control form-control-lg" id="diary-author" name="diary-author" placeholder="Masukkan nama lengkap Anda." required />
      </div>
      <div class="form-group">
        <label for="diary-content">Cerita Menarik</label>
        <textarea class="form-control form-control-lg" id="diary-content" name="diary-content" rows="5" placeholder="Mari berbagi cerita menarik Anda." required /></textarea>
      </div>
      <button type="submit" class="btn btn-outline-info btn-lg p-3 my-2">Kirimkan Cerita</button>
    </form>
  </div>
<?php include_once 'components/foot.php'; ?>