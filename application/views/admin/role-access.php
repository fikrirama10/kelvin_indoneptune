
                <!-- Begin Page Content -->
                <div class="container-fluid">
                	<div class="d-flex justify-content-center">
						<!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->

					</div>
					

                    <!-- Page Heading memanggil nama title yang ada controller user -->       
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    
                     
                 	

                   <div class="row">
                   		<div class="col-lg-6">


					<!-- memunculkan tanda berhasil registrasi menu .di terima dari controller admin -->
                                  

                                    <h5>Role : <?= $role['role']; ?></h5>
                   			<table class="table table-hover">
								  <thead>
								    <tr>
								      <th scope="col"class="p-3 mb-2 bg-primary text-white">#</th>
								      <th scope="col"class="p-3 mb-2 bg-primary text-white">Menu</th>
								      <th scope="col"class="tp-3 mb-2 bg-primary text-white">Access</th>
								       <th scope="col"><a href="<?= base_url('admin/role'); ?>"class="btn btn-primary tn-user btn-bloc badge s ">Kembali</a>
										</th>
								    </tr>
								  </thead>
								  <tbody>
								  	<!-- looping table taba base menu -->
								  	<!-- $menu adalah db user_menu yang di jadikan variable -->
								  	<?php $i = 1; ?>
								  	<?php foreach ($menu as $m) : ?>
								    <tr>
								      <th scope="row"><?= $i; ?></th>
								      <td><?= $m['menu'] ; ?></td>
								      <td>
											<div class="form-check">
												<!-- sintakk chek_access terhubung di folder helpers -->
												<!-- sintak data-role dan data-menu terhubung di templets footer -->
					 				<input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?>
					 				 data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
											  
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

