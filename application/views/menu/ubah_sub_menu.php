<div class="d-flex justify-content-center">
    <!-- <img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="400" height="150"> -->
</div>

<div class="card">
              <div class="card-header">
                Ubah data sub Menu
              </div>
        
              <div class="card-body">
                   <form action="" method="post">
                    <!-- alamat yang akan di kirimkan ke controler ubah -->
                    <input type="hidden" name="id" value="<?= $user_sub_menu['id']; ?>">
                     <div class="form-group">
                        <label for="nama">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="<?= $user_sub_menu['title'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('title') ; ?></small>
                     </div>

                      <div class="form-group">
                        <label for="nama">Menu</label>
                        <input type="text" name="menu" class="form-control" id="menu" value="<?= $user_sub_menu['menu_id'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('menu') ; ?></small>
                     </div>

                      <div class="form-group">
                        <label for="nama">Url</label>
                        <input type="text" name="url" class="form-control" id="url" value="<?= $user_sub_menu['url'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('url') ; ?></small>
                     </div>

                      <div class="form-group">
                        <label for="nama">Icon</label>
                        <input type="text" name="icon" class="form-control" id="icon" value="<?= $user_sub_menu['icon'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('icon') ; ?></small>
                     </div>

                      <div class="form-group">
                        <label for="nama">Active</label>
                        <input type="text" name="active" class="form-control" id="active" value="<?= $user_sub_menu['is_active'] ;?>"> 
                        <!-- Tampilan Ketika terjadi error pada masing2 form -->
                         <small  class="form-text text-danger"><?=form_error('active') ; ?></small>
                     </div>



                      <!-- <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data</button> -->
                    </form>
              </div>
            </div>

<!-- Begin Page Content -->

<!-- /.container-fluid -->

        </div>
    </div>
</div>