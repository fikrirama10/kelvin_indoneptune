<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>

<div class="card">
              <div class="card-header">
                Ubah data
              </div>
        
              <div class="card-body">
                   <form action="" method="post">
                    <!-- alamat yang akan di kirimkan ke controler ubah -->
                    <input type="hidden" name="id" value="<?= $user_menu['id']; ?>">
                     <div class="form-group">
                        <label for="nama">menu</label>
                        <input type="text" name="menu" class="form-control" id="menu" value="<?= $user_menu['menu'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('menu') ; ?></small>
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