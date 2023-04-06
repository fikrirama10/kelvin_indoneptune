
                <div class="container-fluid">

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    		

                   <div class="row">
                   		<div class="col-lg-6">
     <!-- <?= $this->session->flashdata('message'); ?> -->

                    <!-- pesan error ketika pembuatan menu(ADD) baru tidak benar atau todak di isi-->
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

					<!-- memunculkan tanda berhasil registrasi menu .di terima dari controller menu -->
                                  
                   			<a href="" class="btn btn-primary mb-4"  data-toggle="modal" data-target="#newMenuModal">Request Kupon</a>
                   			<table class="table table-hover">
								  <thead>
								    <tr>
								<th scope="col" class="p-3 mb-2 bg-primary text-white">#</th>
								<th scope="col" class="p-3 mb-2 bg-primary text-white">Tanggal</th>
								<th scope="col" class="p-3 mb-2 bg-primary text-white">Departemen</th>
								<th scope="col" class="p-3 mb-2 bg-primary text-white">Shift</th>
								<th scope="col" class="p-3 mb-2 bg-primary text-white">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								 <?php $i = 1; ?>
								  	<?php foreach ($val as $v) : ?>
								    <tr>
								      <th scope="row"><?= $i; ?></th>
								      <td><?= $v['tanggal'] ; ?></td>
								      <td><?= $v['menu'] ; ?></td>
								      <td><?= $v['shift'] ; ?></td>
								      <td>
								      	 <a href="<?= base_url(); ?>request/request_kupon_detail/<?= $v['id'] ;?>"class="badge badge-info">Info Verifikasi</a>
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
	        <h5 class="modal-title" id="newMenuModalLabel">Tambah Departemen</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!-- isis dari foem menu dan dikirimkan ke conreller addmenu -->
	      <form action="<?= base_url('request'); ?>" method="post">
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
					    <input type="number" class="form-control" id="absen" name="absen" placeholder="Tidak Masuk">
				  </div>
				   <div class="form-group">
					    <input type="number" class="form-control" id="alfa" name="alfa" placeholder="Alfa">
				  </div>
				    <div class="form-group">
					    <input type="number" class="form-control" id="sakit" name="sakit" placeholder="Sakit">
				  </div>
				    <div class="form-group">
					    <input type="number" class="form-control" id="izin" name="izin" placeholder="Izin">
				  </div>
				   <div class="form-group">
					    <input type="number" class="form-control" id="cuti" name="cuti" placeholder="Cuti">
				  </div>
				  <div class="form-group">
					    <input type="text" class="form-control" id="total_kupon" name="total_kupon" placeholder="Total Kupon">
				  </div>

				  <div class="form-group">
                            <div class="form-group" >
                                <label for="verifikasi">Verifikasi Data</label>
                                <select disabled sumber: https://www.posciety.com/cara-nonaktifkan-input-form-tidak-bisa-di-klik/ class="form-control" id="validasi_cek" name="validasi_cek">
                                    <option  value="verifikasi check">verifikasi check</option >
                                    <option  value="verifikasi success">verifikasi success</option>
                                 </select> 
                       </div>
				   
<!-- 				   <div class="form-group">
					    <input type="text" class="form-control" id="pemeriksa" name="pemeriksa" placeholder="Pemeriksa" readonly>
				  </div> -->
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Add</button>
	      </div>
	      </form>
	  </div>
	    </div>
	  </div>
	</div> 