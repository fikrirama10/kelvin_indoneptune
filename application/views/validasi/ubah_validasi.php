<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>
<div class="col-lg-6">
<div class="card">
              <div class="card-header">
                Verifikasi Data 
              </div>
        
              <div class="card-body">
                   <form action="" method="post">
                    <!-- alamat yang akan di kirimkan ke controler ubah -->
                    <input type="hidden" name="id" value="<?= $validasi['id']; ?>">
                     <div class="form-group">
                        <label for="nama">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $validasi['tanggal'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('tanggal') ; ?></small>
                     </div>

                     <div class="form-group">
                        <label for="nama">Departemen</label>
                        <input type="text" name="departemen_id" class="form-control" id="departemen_id" value="<?= $validasi['departemen_id'] ;?>"readonly> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('departemen_id') ; ?></small>
                     </div>
                     <div class="form-group">
                        <label for="nama">Shift</label>
                        <input type="text" name="shift_id" class="form-control" id="shift_id" value="<?= $validasi['shift_id'] ;?>"readonly> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('shift_id') ; ?></small>
                     </div>


                      <div class="form-group">
                        <label for="nama">Total Pegawai</label>
                        <input type="text" name="total_pegawai" class="form-control" id="total_pegawai" value="<?= $validasi['total_pegawai'] ;?>"readonly> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('total_pegawai') ; ?></small>
                     </div>

                     <div class="form-group">
                        <label for="nama">Absen</label>
                        <input type="text" name="absen" class="form-control" id="absen" value="<?= $validasi['absen'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('absen') ; ?></small>
                     </div>
                     <div class="form-group">
                        <label for="nama">Alfa</label>
                        <input type="text" name="alfa" class="form-control" id="alfa" value="<?= $validasi['alfa'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('alfa') ; ?></small>
                     </div>
                      <div class="form-group">
                        <label for="nama">Sakit</label>
                        <input type="text" name="sakit" class="form-control" id="sakit" value="<?= $validasi['sakit'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('sakit') ; ?></small>
                     </div>

                      <div class="form-group">
                        <label for="nama">Izin</label>
                        <input type="text" name="izin" class="form-control" id="izin" value="<?= $validasi['izin'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('sakit') ; ?></small>
                     </div>

                        <div class="form-group">
                        <label for="nama">Cuti</label>
                        <input type="text" name="cuti" class="form-control" id="cuti" value="<?= $validasi['cuti'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('cuti') ; ?></small>
                     </div>

                     <div class="form-group">
                        <label for="nama">Total Kupon</label>
                        <input type="text" name="total_kupon" class="form-control" id="total_kupon" value="<?= $validasi['total_kupon'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('total_kupon') ; ?></small>
                     </div>
                       <div class="form-group">
                            <div class="form-group">
                                <label for="verifikasi">Verifikasi Data</label>
                                <select class="form-control" id="validasi_cek" name="validasi_cek">
                                    <option  value="verifikasi check">verifikasi check</option>
                                    <option  value="verifikasi success"><i class="fa-solid fa-circle-exclamation">verifikasi success</i></option>
                                 </select> 
                             </div>

                      <div class="form-group">
                        <label for="nama">Pemeriksa</label>
                        <input type="text" name="pemeriksa" class="form-control" id="pemeriksa" > 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('pemeriksa') ; ?></small>
                     </div>


                      <button type="submit" name="tambah" class="btn btn-primary float-right">valiadasi Data</button>
                    </form>
              </div>
            </div>

<!-- Begin Page Content -->

<!-- /.container-fluid -->

        </div>
    </div>
</div>
</div>