
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
<!-- lebar sampul login warna putih -->
            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- memeneuhkan angka atau huruf menghapus spasi dalam bacground -->
                            <div class="col-lg">
                                <div class="p-5">
                                     <div class="d-flex justify-content-center">
                                            <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="300" height="150">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4"><b>Halaman login</b></h1>
                                    </div>
                                    <!-- memunculkan tanda berhasil registrasi pada login .di terima dari controller auth -->
                                    <?= $this->session->flashdata('message'); ?>

                                    <!-- menerima isi inputan dari form email POST dan dikirimkan datanyake controller auth untuk di ekseskusi -->
                                    <form class="user" method="post" action="<?= base_url('auth'); ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" 
                                                placeholder="Enter Email Address" value="<?= set_value('email'); ?>">
                                                <!-- memunculkan peringatan error -->
                                                 <?= form_error ('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="Password" name="password" placeholder="Password">
                                                <!-- menampilkan pesan error -->
                                                <?= form_error ('password', '<small class="text-danger pl-2">', '</small>'); ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                 <!--    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div> -->
                                    <div class="text-center">
                                        <!-- menunjukan ke controller(halaman) registratuon -->
                                        <a class="small" href="<?= base_url('auth/registration') ?>">Buat Akun Baru!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

  