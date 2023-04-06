<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="d-flex justify-content-center">
		<!-- LOGO INDONEPTUNE -->
		<!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
	</div>
	<!-- MENYIMPAN FLASH DATA DIBAWAH INI -->


	<!-- Page Heading memanggil nama title yang ada controller admin -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<!-- memebuat kolom   -->
	<div class="row">
		<!-- jarak kolom -->
		<div class="col-lg-8">
			<!-- di arahkakan ke contollre userr/edit -->
			<form action="<?= base_url() ?>/user/edit" enctype="multipart/form-data" method="post">

				<!-- pembuatan kolom edit email -->
				<div class="form-group row">
					<label for="email" class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<!-- nama email di ambil dari controller user yang secara otomatis langsung memanggil nama email nya -->
						<input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>" readonly>
					</div>
				</div>
				<!-- pembuatan kolom edit nama -->
				<div class="form-group row">
					<label for="name" class="col-sm-2 col-form-label">full name</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>" >
						<!-- menampilkan pesan error -->
						<?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
					</div>
				</div>
				<!-- pembuatan kolom edit gambar -->
				<div class="form-group row">
					<div class="col-sm-2">Photos</div>
					<div class="col-sm-10">
						<div class="row">
							<div class="col-sm-3">
								<img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
							</div>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" class="custom-file-input" id="image" name="uploaded_image">
									<label class="custom-file-label" for="image">Choose file...</label>
									<div class="invalid-feedback">Example invalid custom file feedback</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary">Edit</button>
					</div>
				</div>

			</form>



		</div>
	</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->