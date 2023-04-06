<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>





                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <!-- PENCARIAN DATA  -->



            

                   <div class="row">
                        <div class="col-lg-6">



                                  <!--SERCH TANGGAL  -->
             <div class="row mt-3">
                    <div class="col-md-6">
                        <form action="" method="post">
                            <div class="input-group ">
                              <input type="date" class="form-control" placeholder="Cari Data Kupon" name="keyword" >
                              <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit" >CARI</button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                            <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col" class="p-3 mb-2 bg-primary text-white">#</th>
                                      <th scope="col" class="p-3 mb-2 bg-primary text-white">Tanggal</th>
                                      <th scope="col" class="p-3 mb-2 bg-primary text-white">Departemen</th>
                                      <th scope="col" class="p-3 mb-2 bg-primary text-white">Shift</th>
                                      <th scope="col" class="p-3 mb-2 bg-primary text-white">Total Kupon</th>
                                      <th scope="col" class="p-3 mb-2 bg-primary text-white">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php $i = 1;   $total = 0;?>
                                  
                                    <?php foreach ($val as $v) :
                                     $total += $v['total_kupon'] ;?>
                                    <tr>
                                      <th scope="row"><?= $i; ?></th>
                                      <td><?= $v['tanggal'] ; ?></td>
                                      <td><?= $v['menu'] ; ?></td>
                                      <td><?= $v['shift'] ; ?></td>
                                      <td><?= $v['total_kupon'] ; ?></td>
                                      <td>
                                         <a href="<?= base_url(); ?>admin/info_detail/<?= $v['id'] ;?>"class="badge badge-info">Info Data</a>
                                      </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                <tr>
                                    <td colspan="4" class="p-3 mb-2 bg-secondary text-white"><b>Total </b></td>
                                    <td class="p-3 mb-2 bg-secondary text-white"><b><?= $total; ?> Kupon</b></td>
                                </tr>
                                  </tbody>
                            </table>
                            <br>

<center>
    <a class="btn btn-primary"href= "<?= base_url('admin/cetak_kupon'); ?>" target="_blank">Cetak Laporan Kupon</a>
</center>
                        

                        </div>
                   </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- FORM MODAL DOWNLOAD DI BOSTRAPS -->s
<!-- Button trigger modal SUDAH DI PINDAHAKAN KE ATAS -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button> -->



    <!-- Modal -->
    <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newMenuModalLabel">Input Kupon Pegawai</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- isis dari foem menu dan dikirimkan ke conreller addmenu -->
          <form action="<?= base_url('admin'); ?>" method="post">
          <div class="modal-body">
                 <div class="form-group">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                  </div>

                  <div class="form-group">
                      <select name="departemen_id" id="departemen_id" class="form-control">
                        <option value="Select Menu">Pilih Departemen</option>
                        <?php foreach ($dep as $d) : ?>
                          <option value="<?= $d ['id']; ?>"><?= $d['menu']; ?></option>
                        <?php endforeach; ?>  
                      </select>
                   </div>

                   <div class="form-group">
                      <select name="shift_id" id="shift_id" class="form-control">
                        <option value="Select Menu">Pilih Shift</option>
                        <?php foreach ($shift as $s) : ?>
                          <option value="<?= $s ['id']; ?>"><?= $s['shift']; ?></option>
                        <?php endforeach; ?>  
                      </select>
                   </div>


                  <div class="form-group">
                        <input type="text" class="form-control" id="total_pegawai" name="total_pegawai" placeholder="Total Pegawai">
                  </div>
                   <div class="form-group">
                        <input type="text" class="form-control" id="absen" name="absen" placeholder="Absen">
                  </div>
                  <div class="form-group">
                        <input type="text" class="form-control" id="total_kupon" name="total_kupon" placeholder="Total Kupon">
                  </div>

                   <div class="form-group">
                        <input type="text" class="form-control" id="validasi" name="validasi" placeholder="Tunggu Cek Validasi" readonly>
                  </div>
                   
                   <div class="form-group">
                        <input type="text" class="form-control" id="pemeriksa" name="pemeriksa" placeholder="Pemeriksa" readonly>
                  </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary"onclick= "return confirm('pastikan jumlah kupon yang di pinta sudah benar, jika ragu periksa kembali !');">Add</button>
          </div>
          </form>
        </div>
      </div>
    </div>


<!-- Begin Page Content -->

<!-- /.container-fluid -->

        </div>
    </div>
</div>