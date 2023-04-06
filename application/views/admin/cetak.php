
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
								      <th scope="col">Departemen</th>
								      <th scope="col">Shift</th>
								      <th scope="col">total</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php $i = 1; 	$total = 0;?>
								  
								  	<?php foreach ($val as $v) :
								  	 $total += $v['total_kupon'] ;?>
								    <tr>
								      <th scope="row"><?= $i; ?></th>
								      <td><?= $v['tanggal'] ; ?></td>
								      <td><?= $v['menu'] ; ?></td>
								      <td><?= $v['shift'] ; ?></td>
								      <td><?= $v['total_kupon'] ; ?></td>
								    </tr>
								    <?php $i++; ?>
								<?php endforeach; ?>
								<tr>
									<td  class="p-3 mb-2 bg-secondary text-white" colspan="4"><b>Total </b></td>
									<td class="p-3 mb-2 bg-secondary text-white"><b><?= $total; ?> Kupon</b></td>
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