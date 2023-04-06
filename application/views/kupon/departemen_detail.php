
               
                <div class="container-fluid">

                          
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    		

                   <div class="row">
                   		<div class="col-lg-9">
     <!-- <?= $this->session->flashdata('message'); ?> -->

                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>                    
  		<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col" class="tp-3 mb-2 bg-secondary text-white"><b>Nama Departemen</b></th>
					</tr>
				<tbody>
							<tr>
								<td ><b> <?= $depar['menu']; ?> </b></td>
					  	</tr>

				</tbody>
				</thead>
			</table>
	<div class="col-lg-5">
		
			<h4><b>History Kupon Pegawai</b></h4>

			  <a href=""class="btn btn-primary mb-"  data-toggle="modal" data-target="#newMenuModal">Tambah Kupon</a>

			  <a href="<?= base_url('request'); ?>" class="btn btn-success">Request Jumlah Kupon</a>
			  <label>

			</label>
<br>
			  <br>
			<table class="table table-hover">
				<thead>
					<tr> 

						 </tr>

					<tr>
						<th scope="col" class="tp-3 mb-2 bg-primary text-white"><b>Nama</b></th>
						<th scope="col" class="tp-3 mb-2 bg-primary text-white"><b>No. Induk</b></th>
							<th scope="col" class="tp-3 mb-2 bg-primary text-white"><b>jabatan</b></th>
							<th scope="col" class="tp-3 mb-2 bg-primary text-white"><b>Shift</b></th>
						<th scope="col" class="tp-3 mb-2 bg-primary text-white"><b>Departemen</b></th>	
						<th scope="col" class="tp-3 mb-2 bg-primary text-white"><b>Jumlah Kupon</b></th>	

					</tr>
				</thead>
				<tbody>

					<?php $i = 1 ?>
					<?php foreach ($kupon as $k) : ?>
						<tr>
							<td><?= $k['nama']; ?></td>
							<td><?= $k['noinduk']; ?></td>
							<td><?= $k['namajabatan']; ?></td>
							<td><?= $k['shift']; ?></td>
							<td><?= $k['menu']; ?></td>
							<td><?= $k['jumlah']; ?></td>
							<td></td>
						</tr>
						
						<?php $i++; ?>
					<?php endforeach; ?>
						<tr>

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
	        <h5 class="modal-title" id="newMenuModalLabel">Tambah Kupon</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!-- isis dari foem menu dan dikirimkan ke conreller addmenu -->
	      <form action="<?= base_url('user_kupon/kupon/'). $depar['id']; ?>" method="post">
	      <div class="modal-body">
			    <!--   <div class="form-group">
                        <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal">
                        <small  class="form-text text-danger"><?=form_error('tanggal') ; ?></small> 
                  </div> -->
                   <div class="form-group">
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                        <small  class="form-text text-danger"><?=form_error('nama') ; ?></small> 
                  </div>
				  <div class="form-group">
                        <input type="text" class="form-control" id="noinduk" name="noinduk" placeholder="Noinduk">
                        <small  class="form-text text-danger"><?=form_error('noinduk') ; ?></small> 
                  </div>
                
											<div class="form-group">
						                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Kupon">
						                        <small  class="form-text text-danger"><?=form_error('jumlah') ; ?></small> 
		                 					 </div>

                   <div class="form-group">
                      <select name="jabatan_id" id="jabatan_id" class="form-control">
                        <option value="Select Menu">Pilih jabatan</option>
                        <?php foreach ($jab as $j) : ?>
                          <option value="<?= $j['id']; ?>"><?= $j['namajabatan']; ?></option>
                        <?php endforeach; ?>  
                      </select>
                   </div>

                     <div class="form-group">
					   					 <label for="uang_kupon">Jenis Kupon</label>
					 							 <select class="form-control" id="uang_kupon" name="uang_kupon">
					 							 		<option value="3500">SUBKONTRAK</option>
					 							 		<option value="10000">KARYAWAN(PAGI-NONSHIFT-SIANG)</option>
					      								<option value="10500">KARYAWAN(MALAM)</option>
					      								<option value="20000">KARYAWAN(LEMBUR)</option>
					      								<option value="10000">SUB LEADER(PAGI-NONSHIFT-SIANG)</option>
					     						 		<option value="10500">SUB LEADER(MALAM)</option>
														<option value="10000">LEADER (PAGI-SIANG)</option>
														<option value="10500">LEADER (MALAM)</option>
														<option value="12500">CHIEF LEADER</option>
														<option value="17500">SUPERVISIOR</option>
														<option value="17500">ASS. MANAGER</option>
														<option value="17500">MANAGER</option>
														<option value="17500">ASS. GENERAL MANAGER</option>
														<option value="17500">GENERAL MANAGER</option>
														<option value="17500">DIRECTOR</option>
														<option value="17500">VICE PRES. DIRECTOR</option>
														<option value="17500">SENIOR GEN. MANAGER </option>
														    <small  class="form-text text-danger"><?=form_error('uang_kupon') ; ?></small> 
												</select>
									  </div>
 
           

                   <div class="form-group">
                      <select name="shift_id" id="shift_id" class="form-control">
                        <option value="Select Menu">Pilih shift</option>
                        <?php foreach ($shift as $s) : ?>
                          <option value="<?= $s['id']; ?>"><?= $s['shift']; ?></option>
                        <?php endforeach; ?>  
                      </select>
                   </div>

							 <div class="form-group">
                      <select name="departemen_id" id="departemen_id" class="form-control">
                        <option value="Select Menu">Pilih departemen</option>
                        <?php foreach ($dep as $d) : ?>
                          <option value="<?= $d['id']; ?>"><?= $d['menu']; ?></option>
                        <?php endforeach; ?>  
                      </select>
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