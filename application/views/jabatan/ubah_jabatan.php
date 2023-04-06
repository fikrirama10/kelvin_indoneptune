<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>

<div class="card">
              <div class="card-header">
                Ubah Data Jabatan
              </div>
                
        
              <div class="card-body">
                   <form action="" method="post">
                    <!-- alamat yang akan di kirimkan ke controler ubah -->
                    <input type="hidden" name="id" value="<?= $jabatan['id']; ?>">
                     <div class="form-group">
                        <label for="nama">Nama Jabatan</label>
                        <input type="text" name="namajabatan" class="form-control" id="namajabatan" value="<?= $jabatan['namajabatan'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('namajabatan') ; ?></small>
                     </div>
                      <div class="form-group">
                        <label for="nama">Uang Kupon</label>
                        <input type="text" name="uang_kupon" class="form-control" id="uang_kupon" value="<?= $jabatan['uang_kupon'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('uang_kupon') ; ?></small>
                     </div>

                      <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
              </div>
            </div>

<!-- Begin Page Content -->

<!-- /.container-fluid -->

        </div>
    </div>
</div>