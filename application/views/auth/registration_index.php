

    <div class="container">
        <!-- supaya menjadi ke tengah isi form registrasinya -->
        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-">
                        <div class="p-5">
                            <div class="text-center">
                               <div class="d-flex justify-content-center">
                                            <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="300" height="150">
                                    </div>
                            </div>
                            <!-- mengirimkan data registrasi ke halaman controller auth method registration -->
                            <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="name" name="name" 
                                        placeholder="Full name" value="<?= set_value('name'); ?>"> 
                                        <!-- membuat alert error untuk name yang tdak di isi -->
                                        <?= form_error ('name', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nik" name="nik" 
                                        placeholder="nomor induk" value="<?= set_value('nik'); ?>"> 
                                        <!-- membuat alert error untuk name yang tdak di isi -->
                                        <?= form_error ('nik', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="bagian" name="bagian" 
                                        placeholder="bagian" value="<?= set_value('bagian'); ?>"> 
                                        <!-- membuat alert error untuk name yang tdak di isi -->
                                        <?= form_error ('bagian', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                                 <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan" 
                                        placeholder="jabatan" value="<?= set_value('jabatan'); ?>"> 
                                        <!-- membuat alert error untuk name yang tdak di isi -->
                                        <?= form_error ('jabatan', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="departemen" name="departemen" 
                                        placeholder="departemen" value="<?= set_value('jabatan'); ?>"> 
                                        <!-- membuat alert error untuk name yang tdak di isi -->
                                        <?= form_error ('jabatan', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                               
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" 
                                        placeholder="Email Address"  value="<?= set_value('email'); ?>">
                                         <?= form_error ('email', '<small class="text-danger pl-2">', '</small>'); ?>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Password">
                                             <?= form_error ('password1', '<small class="text-danger pl-2">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Repeat Password">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <!-- kembali controller (halaman) auth(login) -->
                                <a class="small" href="<?= base_url('auth') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
