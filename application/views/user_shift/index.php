<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>



                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
            

                   <div class="row">
                        <div class="col-lg-6">
    <!-- <?= $this->session->flashdata('message'); ?> -->

                    <!-- pesan error ketika pembuatan menu(ADD) baru tidak benar atau todak di isi-->
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                    <!-- memunculkan tanda berhasil registrasi menu .di terima dari controller menu -->
                                  
                            <a href="" class="btn btn-primary mb-4"  data-toggle="modal" data-target="#newMenuModal">Input kupon</a>
                            <table class="table table-hover">
                                  <thead>
                                    <tr>
                                      <th scope="col" class="tp-3 mb-2 bg-primary text-white">no</th>
                                      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Shift</th>
                                       <th scope="col" class="tp-3 mb-2 bg-primary text-white">Harga </th>
                                         <th scope="col" class="tp-3 mb-2 bg-primary text-white">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($shift as $s) : ?>
                                    <tr>
                                      <th scope="row"><?= $i; ?></th>
                                      <td><?= $s['shift'] ; ?></td>
                                        <td><?= $s['harga'] ; ?></td>
                                      <td>
                                         <a href="<?= base_url(); ?>admin/ubah_shift/<?= $s['id'] ;?>"class="badge badge-success">edit</a>
                                         <a href="<?= base_url(); ?>admin/hapus_shift/<?= $s['id'] ;?>"class="badge badge-danger "onclick= "return confirm('yakin?');">hapus</a>
                                      </td>
                                      <td>

                                <!--           <div class="form-check">
                                      <input class="form-check-input" type="checkbox"> -->
                                    </div> 
                                      </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                  </tbody>
                            </table>
                        

                        </div>
                   </div>




                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<!-- FORM MODAL DOWNLOAD DI BOSTRAPS -->
<!-- Button trigger modal SUDAH DI PINDAHAKAN KE ATAS -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Launch demo modal
    </button> -->



    <!-- Modal -->
    <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newMenuModalLabel">Input Kupon</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- isis dari foem menu dan dikirimkan ke conreller addmenu -->
          <form action="<?= base_url('admin/shift'); ?>" method="post">
          <div class="modal-body">
                 <div class="form-group">
                        <input type="text" class="form-control" id="shift" name="shift" placeholder="Shift">
                        <small  class="form-text text-danger"><?=form_error('shift') ; ?></small> 
                  </div>

                  <div class="form-group">
                        <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Kupon">
                        <small  class="form-text text-danger"><?=form_error('harga') ; ?></small> 
                  </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
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