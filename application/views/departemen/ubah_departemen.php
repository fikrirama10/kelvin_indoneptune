<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>

<div class="card">
              <div class="card-header">
                <div class="alert alert-dark" role="alert">
      Ubah Data Departemen
                              
          <!-- <div class="col-sm-6 mb-3 mb-sm-0"> -->
                <div class="card-body">
                   <form action="" method="post">
                    <!-- alamat yang akan di kirimkan ke controler ubah -->
                    <input type="hidden" name="id" value="<?= $departemen['id']; ?>">
                     <div class="form-group">
                        <label for="nama">Nama Departemen</label>
                        <input type="text" name="menu" class="form-control" id="menu" value="<?= $departemen['menu'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('menu') ; ?></small>
                     </div>

                      <button type="submit" name="tambah" class="btn btn-primary float-center ">Ubah Data Departemen</button>
                    </form>
                </div>
              </div>
            <!-- </div> -->

<!-- Begin Page Content -->

<!-- /.container-fluid -->

        </div>
    </div>
</div>