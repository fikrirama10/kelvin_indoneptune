

    

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="card mb-3" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="<?= base_url('assets/img/profile') . $user['image']?>" class="card-img">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body">
                            <h5 class="card-title"><?= $use['name']; ?></h5>
                            <p class="card-text">No.Induk : <?= $use['nik']; ?></p>
                            <p class="card-text">Tanggal Lahir : <?= $use['tanggal_lahir']; ?></p>
                            <p class="card-text">jabatan : <?= $use['jabatan']; ?></p>
                            <p class="card-text">nama email : <?= $use['email']; ?></p>
                            <p class="card-text"><small class="text-muted">pembuatan akun <?= date('d F Y', $use['date_created']); ?></small></p>
                          </div>
                        </div>
                      </div>
                    </div>


                          <a href="<?= base_url('admin/users'); ?>">&larr; Kembali !</a>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

          