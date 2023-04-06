
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
       <img src="<?= base_url() ?>assets/img/gambar.png" style="display:block; margin:auto;" alt="" width="150" height="50"> 
       <h1 class="h3 mb-4 text-gray-800 "><?= $title; ?></h1>
        

                   <div class="row">
                      <div class="col-lg-4">
     <!-- <?= $this->session->flashdata('message'); ?> -->

                    <!-- pesan error ketika pembuatan menu(ADD) baru tidak benar atau todak di isi-->
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

          <!-- memunculkan tanda berhasil registrasi menu .di terima dari controller menu -->
                                  
                
                        <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                       <th scope="col">Tanggal</th>
                      <th scope="col">nama</th>
                      <th scope="col">No. Induk</th>
                      <th scope="col">Jabatan</th>
                      <th scope="col">Uang Kupon</th>
                       <th scope="col">Shift</th>
                        <th scope="col">Departemen</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1;   $total = 0;?>
                  
                    <?php foreach ($kupon as $k) :
                     $total += $k['uang_kupon'] ;?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><?= $k['tanggal']; ?></td>
                      <td><?= $k['nama']; ?></td>
                      <td><?= $k['noinduk']; ?></td>
                      <td><?= $k['jabatan']; ?></td>
                     <td>Rp. <?= number_format($k['uang_kupon']); ?></td>
                     <td><?= $k['shift']; ?></td>
                     <td><?= $k['menu']; ?></td>
                    <?php $i++; ?>
                <?php endforeach; ?>
                <tr>
                   <td colspan="5" class="p-3 mb-2 bg-secondary text-white"><b>Total Anggaran</b></td>
                   <td class="p-3 mb-2 bg-secondary text-white"><b>Rp. <?= number_format($total) ; ?></b>
                </tr>
                  </tbody>
              </table>
              <br>
              <script> window.print();</script>


                      

                      </div>
                   </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


      </div>
    </div>
  </div>