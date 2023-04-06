
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
                                  
                        <a href="" class="btn btn-primary mb-4"  data-toggle="modal" data-target="#newMenuModal"> Input Anggaran</a>

                        <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col" class="tp-3 mb-2 bg-primary text-white">#</th>
                      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Tanggal</th>
                      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Departemen</th>
                        <th scope="col" class="tp-3 mb-2 bg-primary text-white">Grup</th>
                      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Nominal</th>
                       <th scope="col" class="tp-3 mb-2 bg-primary text-white">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($anggaran as $ang) : ?>
                    <tr>
                      <th scope="row"><?= $i; ?></th>
                      <td><?= $ang['tanggal'] ; ?></td>
                      <td><?= $ang['menu'] ; ?></td>
                       <td><?= $ang['grup'] ; ?></td>
                      <td><?=number_format($ang['nominal'])  ; ?></td>
                      <td>
                         <a href="<?= base_url(); ?>anggaran/ubah_anggaran/<?= $ang['id'] ;?>"class="badge badge-success">edit</a>
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
          <h5 class="modal-title" id="newMenuModalLabel">Anggaran Departemen</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        
        <!-- isis dari foem menu dan dikirimkan ke conreller addmenu -->
        <form action="<?= base_url('anggaran'); ?>" method="post">

        <div class="modal-body">
           <div class="form-group">
              <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal Anggaran">
          </div>
        </div>

      <div class="modal-body">
         <div class="form-group">
             <select name="departemen_id" id="departemen_id" class="form-control">
                  <option value="Select Menu">Pilih departemen</option>
                   <?php foreach ($departemen as $d) : ?>
                  <option value="<?= $d['id']; ?>"><?= $d['menu']; ?></option>
                    <?php endforeach; ?>  
            </select>
          </div>
        </div>
              <div class="form-group">
                       <label for="grup">Grup</label>
                         <select class="form-control" id="grup" name="grup">
                            <option value="NONSHIFT">GRUP NONSHIFT</option>
                            <option value="A">GRUP A</option>>
                            <option value="B">GRUP B</option>
                            <option value="C">GRUP C</option>
                               <option value="D">GRUP D</option>
                                <small  class="form-text text-danger"><?=form_error('grup') ; ?></small> 
                        </select>
                    </div>

        <div class="modal-body">
           <div class="form-group">
              <input type="text" class="form-control" id="nominal" name="nominal" placeholder="NominalAnggaran">
          </div>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" onclick= "return confirm('nominal yang di inputkan sudah yakin ?, jika tidak periksa kembali');">Add</button>
        </div>

        </form>
      </div>
    </div>
  </div>