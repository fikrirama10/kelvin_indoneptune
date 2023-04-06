<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>

<div class="card">
              <div class="card-header">
                Ubah Data Shift
              </div>
                
        
              <div class="card-body">
                   <form action="" method="post">
                    <!-- alamat yang akan di kirimkan ke controler ubah -->
                    <input type="hidden" name="id" value="<?= $user_shift['id']; ?>">
                     <div class="form-group">
                        <label for="nama">Nama Shift</label>
                        <input type="text" name="shift" class="form-control" id="shift" value="<?= $user_shift['shift'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('shift') ; ?></small>
                     </div>
                      <div class="form-group">
                        <label for="nama">Harga Kupon</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="<?= $user_shift['harga'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('harga') ; ?></small>
                     </div>

                      <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data Shift</button>
                    </form>
              </div>
            </div>

<!-- Begin Page Content -->

<!-- /.container-fluid -->

        </div>
    </div>
</div>