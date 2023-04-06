<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="d-flex justify-content-center">
		<!-- LOGO INDONEPTUNE -->
		<!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
	</div>
	<!-- Page Heading memanggil nama title yang ada controller user -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<!-- membuat baris -->
	<div class="row">
		<!-- membuat kolom -->
		<div class="col-lg-6">
			<!-- menampilkan pesan gagal/berhasil penggantia password -->
			<!-- MENYIMPAN FLASH DATA -->
			
			<!-- action dia arahlan ke controler user/change password -->
			<!-- method post diartikan sebagai dikirmkan data -->
			<form action="<?= base_url('user/changepassword'); ?>" method="post">
				<!-- form di bawah hasil copas dari bootstrap -->
				<div class="form-group">
					<label for="current_password">Password Lama</label>
					<input type="password" class="form-control" id="current_password" name="current_password">
					<!-- menampilkan error jika ada kesalahan saat pengisian password baru -->
					<?= form_error('current_password', '<small class="text-danger pl-2">', '</small>'); ?>
				</div>
				<!-- form untuk password 1 -->
				<div class="form-group">
					<label for="new_password1">Password Baru</label>
					<input type="password" class="form-control" id="new_password1" name="new_password1">
					<!-- menampilkan error jika ada kesalahan saat pengisian password baru -->
					<?= form_error('new_password1', '<small class="text-danger pl-2">', '</small>'); ?>
				</div>
				<div class="form-group">
					<label for="new_password2">Validasi Password</label>
					<input type="password" class="form-control" id="new_password2" name="new_password2">
					<!-- menampilkan error jika ada kesalahan saat pengisian password baru -->
					<?= form_error('new_password2', '<small class="text-danger pl-2">', '</small>'); ?>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Change password</button>
				</div>
			</form>



		</div>
	</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->