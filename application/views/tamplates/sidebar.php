<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- mengubah emoji copas di font awesome -->
           
        </div>
        <div class="sidebar-brand-text mx-3"><img src="<?= base_url() ?>assets/img/gambar.png" alt="" width="150" height="50"></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">


    <!-- QUERY MENU KE DATA BASE -->
    <?php
    $role_id = $this->session->userdata('role_id');
    // pilih id di table user_menu,dan menu
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
             -- dari table user_menu gabung table user_access_menu
                    FROM `user_menu` JOIN `user_access_menu`
        -- hubungkan id dari table user_menu KE menu_id yang ada di table user_access_menu menjadi menu_id
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`

                    WHERE `user_access_menu`.`role_id` = $role_id
                    ORDER BY `user_access_menu`.`menu_id` ASC";
    $menu = $this->db->query($queryMenu)->result_array();

    ?>


    <!-- LOOPING (PERULANGAN) -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>


        <!-- SIAPKAN SUB-MENU SESUAI MENU -->
        <?php
        $menuId = $m['id'];
        $querySubMenu = "SELECT *
                                                FROM `user_sub_menu` JOIN `user_menu`
                                                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                                                WHERE `user_sub_menu`.`menu_id` = $menuId 
                                                AND `user_sub_menu`.`is_active` = 1 
                                                ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>
        <!-- KONDISI MENYALAKAN JUDUL -->
        <?php foreach ($subMenu as $sm) : ?>
            <!-- JIKA SUBTITLE SEDANG DI PILIH MAKA NYALAKAN ACTIVE -->
            <?php if ($title == $sm['title']) : ?>
                <li class="nav-item active">
                    <!-- JIKA TIDAK DI PILIH TIDAK DINYALAKAN -->
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title'] ?></span></a>
                </li>

            <?php endforeach; ?>
            <!-- Divider -->
            <hr class="sidebar-divider mt-3">

        <?php endforeach; ?>



        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/Logout'); ?>">
                <i class="fa fa-bookmark"></i>
                <span>Logout</span></a>

            <!-- Divider  PEMISAH -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

</ul>
<!-- End of Sidebar -->