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
                    <input type="hidden" name="id" value="<?= $user_kupon['id']; ?>">
                     <div class="form-group">
                        <label for="nama">tanggal</label>
                        <input type="dete" name="tanggal" class="form-control" id="tanggal" value="<?= $user_kupon['tanggal'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('tanggal') ; ?></small>
                     </div>

                     
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $user_kupon['nama'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('tanggal') ; ?></small>
                     </div>

                       <div class="form-group">
                        <label for="nama">Noinduk</label>
                        <input type="text" name="noinduk" class="form-control" id="noinduk" value="<?= $user_kupon['noinduk'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('noinduk') ; ?></small>
                     </div>

                     <div class="form-group">
                        <label for="nama">Jabatan</label>
                        <input type="text" name="jabatan_id" class="form-control" id="jabatan_id" value="<?= $user_kupon['jabatan_id'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('namajabatan') ; ?></small>
                     </div>

                      <div class="form-group">
                        <label for="nama">Shift</label>
                        <input type="text" name="shift_id" class="form-control" id="shift_id" value="<?= $user_kupon['shift_id'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('shift_id') ; ?></small>
                     </div>

               
                    <div class="form-group">
                        <label for="nama">jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $user_kupon['jumlah'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('jumlah') ; ?></small>
                     </div>

                      <div class="form-group">
                        <label for="nama">petugas</label>
                        <input type="text" name="petugas" class="form-control" id="petugas" value="<?= $user_kupon['petugas'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('petugas') ; ?></small>
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