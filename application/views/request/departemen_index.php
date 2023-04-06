
                <div class="container-fluid">

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    		

                   <div class="row">
                   		<div class="col-lg-6">
     <!-- <?= $this->session->flashdata('message'); ?> -->

                    <!-- pesan error ketika pembuatan menu(ADD) baru tidak benar atau todak di isi-->
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

					<!-- memunculkan tanda berhasil registrasi menu .di terima dari controller menu -->
                                  
                   			<!-- <a href="" class="btn btn-primary mb-4"  data-toggle="modal" data-target="#newMenuModal">Tambah Departemen</a> -->
                   			<table class="table table-hover">
								  <thead>
								    <tr>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">#</th>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white"><b>Menu</b></th>
								      <th scope="col"class="tp-3 mb-2 bg-primary text-white"><b>Action</b></th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php $i = 1; ?>
								  	<?php foreach ($depar as $d) : ?>
								    <tr>
								      <th scope="row"><?= $i; ?></th>
								      <td><?= $d['menu'] ; ?></td>
								      <td>
									       <!-- <a href="<?= base_url(); ?>admin/hapus_departemen/<?= $d['id'] ;?>"
									       		class="badge badge-danger "onclick= "return confirm('yakin?');">Hapus</a>
									       <a href="<?= base_url(); ?>admin/ubah_departemen/<?= $d['id'] ;?>"
									       		class="badge badge-success">Edit</a> -->
									       <a href="<?= base_url(); ?>request/departemen_detail/<?= $d['id'] ;?>"
									         	class="badge badge-primary">Detail</a>

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
	      <form action="<?= base_url('admin/departemen'); ?>" method="post">
	      <div class="modal-body">
			     <div class="form-group">
					    <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Departemen">
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