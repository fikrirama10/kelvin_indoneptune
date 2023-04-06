
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                   <div class="row">
                   		<div class="col-lg">


                 <?php if (validation_errors()) : ?>
                 	<div class="alert alert-danger" role="alert">
                 		<?= validation_errors(); ?>
                 	</div>
                 <?php endif; ?>
                   

					<!-- memunculkan tanda berhasil registrasi menu .di terima dari controller menu -->
                           

                   			<a href="" class="btn btn-primary mb-4"  data-toggle="modal" data-target="#newSubMenuModal">Add New Submenu</a>
                   			<table class="table table-hover">
								  <thead>
								    <tr>
								    	<!-- daftar sama dengan yang ada didatabase user sub menu -->
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">#</th>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Title</th>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Menu</th>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Url</th>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Icon</th>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Active</th>
								      <th scope="col" class="tp-3 mb-2 bg-primary text-white">Action</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<?php $i = 1; ?>
								  	<!-- foreeach yang ada di controller menu.php di method submenu -->
								  	<?php foreach ($subMenu as $sm) : ?>
								    <tr>
								      <th scope="row"><?= $i; ?></th>
								       <td><?= $sm['title'] ; ?></td>
								      <td><?= $sm['menu'] ; ?></td>
								       <td><?= $sm['url'] ; ?></td>
								        <td><?= $sm['icon'] ; ?></td>
								         <td><?= $sm['is_active'] ; ?></td>
								      <td>
								      	 <a href="<?= base_url(); ?>menu/ubahsub/<?= $sm['id'] ;?>"class="badge badge-success">edit</a>
								      	 <a href=""class="badge badge-danger">delete</a>
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
	<div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="newSubMenuModalLabel">Add New SubMenu</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!-- isis dari foem menu dan dikirimkan ke conreller menu/submenu -->
	      <form action="<?= base_url('menu/subMenu'); ?>" method="post">
	      <div class="modal-body">
			     <div class="form-group">
					    <input type="text" class="form-control" id="title" name="title" placeholder="Submenu title">
				  </div>
				  <div class="form-group">
				  		<select name="menu_id" id="menu_id" class="form-control">
				  			<option value="Select Menu">pilih menu</option>
				  			<?php foreach ($menu as $m) : ?>
				  				<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
				  			<?php endforeach; ?>	
				  		</select>
				  </div>

				  <div class="form-group">
					    <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url">
				  </div>
				  <div class="form-group">
					    <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon">
				  </div>
				  <div class="form-group">
				  	<div class="form-check">
					  <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked="">
					  <label class="form-check-label" for="is_active">
					    Active ?
					  </label>
					</div>
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