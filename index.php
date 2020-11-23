<?php include_once 'components/head.php'; ?>
  <div class="hero text-center text-white d-flex justify-content-center align-items-center">
    <h1 class="hero-title parisienne-font">Diary</h1>
  </div>
  
  <div class="container-md my-5">
    <h1 class="text-center mb-4 border-bottom border-success text-success title strong-fontsize">Daftar Diary Mahasiswa</h1>
    <table id="list-table" class="table table-hover table-bordered" style="width: 100%">
      <thead class="thead-dark text-center">
        <tr>
          <th scope="col" class="align-middle">#</th>
          <th scope="col" class="align-middle">Judul</th>
          <th scope="col" class="align-middle">Nama Pengarang</th>
          <th scope="col" class="align-middle">Tanggal Posting</th>
          <th scope="col" class="align-middle">Aksi</th>
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
            <a href="detail.php?id=<?= $row['id']; ?>" class="btn btn-outline-info" role="button" aria-pressed="true"><i class="fa fa-eye"></i></a>
            <a href="update.php?id=<?= $row['id']; ?>" class="btn btn-outline-warning" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
            <button onclick="deleteThis(<?= $row['id']; ?>)" class="btn btn-outline-danger" role="button" aria-pressed="true"><i class="fa fa-trash"></i></button>
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
<?php
  include_once 'components/foot.php';
  if($_SESSION['success-add']) :
    $_SESSION['success-add'] = false;
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Cerita Anda berhasil dikirim!!!',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
<?php
  endif;
  if($_SESSION['success-edit']) :
    $_SESSION['success-edit'] = false;
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Cerita Anda berhasil disunting!!!',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
<?php
  endif;
  if($_SESSION['success-delete']) :
    $_SESSION['success-delete'] = false;
?>
  <script>
    Swal.fire({
      icon: 'success',
      title: 'Cerita Anda telah terhapus.',
      showConfirmButton: false,
      timer: 2000
    })
  </script>
<?php endif; ?>
  <script>
    const deleteThis = (id) => {
    const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-danger mx-2',
        cancelButton: 'btn btn-outline-primary mx-2'
      },
      buttonsStyling: false
     })
      swalWithBootstrapButtons.fire({
        title: 'Ingin menghapus data ini?',
        text: "Data akan hilang setelah dihapus!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'HAPUS',
        cancelButtonText: 'BATAL'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location.href = window.location.href + (window.location.href.includes('index.php') ? '/..' : '') + `/delete.php?id=${id}`
        }
      })
    }
  </script>
<?php include_once 'components/close.php'; ?>