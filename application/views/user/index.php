<!-- Begin Page Content -->
<div class="container-fluid">

  <div class="d-flex justify-content-center">
    <!-- LOGO INDONEPTUNE -->
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
  </div>

  <!-- Page Heading memanggil nama title yang ada controller user -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
<!-- MENYIMPAN SINTAK FLASH DATA DI BAWAH INI -->


  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?= base_url('/assets/img/profile/') . $user['image'] ?>" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?= $user['name']; ?></h5>
          <p class="card-text">No.Induk : <?= $user['nik']; ?></p>
          <p class="card-text">Bagian : <?= $user['bagian']; ?></p>
          <p class="card-text">Jabatan : <?= $user['jabatan']; ?></p>
          <p class="card-text">Departemen : <?= $user['departemen']; ?></p>
          <p class="card-text">Nama Email : <?= $user['email']; ?></p>
          <p class="card-text"><small class="text-muted">pembuatan akun <?= date('d F Y', $user['date_created']); ?></small></p>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->