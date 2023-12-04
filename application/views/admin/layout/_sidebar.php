<body class="navbar-fixed sidebar-fixed" id="body">
    <!-- <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script> -->


    <!-- <div id="toaster"></div> -->


    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">


        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <aside class="left-sidebar sidebar-dark" id="left-sidebar">
            <div id="sidebar" class="sidebar sidebar-with-footer">
                <!-- Aplication Brand -->
                <div class="app-brand">
                    <a href="<?= base_url('admin/home'); ?>">
                        <img src="<?= base_url('assets/image/smk.png'); ?>" alt="Mono" width="50">
                        <span class="brand-name">Skandakra</span>
                    </a>
                </div>
                <!-- begin sidebar scrollbar -->
                <div class="sidebar-left" data-simplebar style="height: 100%;">
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">

                        <?php $menu = $this->uri->segment(2); ?>
                        <li class="<?php if ($menu == 'home') {
                                        echo "active";
                                    } ?>">
                            <a class="sidenav-item-link" href="<?= base_url('admin/home'); ?>">
                                <i class="mdi mdi-home"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                        </li>


                        <li class="section-title">
                            Menu
                        </li>



                        <li class="<?php if ($menu == 'caraousel') {
                                        echo "active";
                                    } ?>">
                            <a class="sidenav-item-link" href="<?= base_url('admin/caraousel'); ?>">
                                <i class="mdi mdi-chess-queen"></i>
                                <span class="nav-text">Caraousel</span>
                            </a>
                        </li>
                        <li class="<?php if ($menu == 'kategori') {
                                        echo "active";
                                    } ?>">
                            <a class="sidenav-item-link" href="<?= base_url('admin/kategori'); ?>">
                                <i class="mdi mdi-table"></i>
                                <span class="nav-text">Kategori Konten</span>
                            </a>
                        </li>
                        <li class="<?php if ($menu == 'konten') {
                                        echo "active";
                                    } ?>">
                            <a class="sidenav-item-link" href="<?= base_url('admin/konten'); ?>">
                                <i class="mdi mdi-youtube-tv"></i>
                                <span class="nav-text">Konten</span>
                            </a>
                        </li>
                        <li class="<?php if ($menu == 'saran') {
                                        echo "active";
                                    } ?>">
                            <a class="sidenav-item-link" href="<?= base_url('admin/saran'); ?>">
                                <i class="mdi mdi-message"></i>
                                <span class="nav-text">Saran</span>
                            </a>
                        </li>
                        <li class="<?php if ($menu == 'galeri') {
                                        echo "active";
                                    } ?>">
                            <a class="sidenav-item-link" href="<?= base_url('admin/galeri'); ?>">
                                <i class="mdi mdi-image-multiple"></i>
                                <span class="nav-text">Galeri</span>
                            </a>
                        </li>

                        <li class="<?php if ($menu == 'konfigurasi') {
                                        echo "active";
                                    } ?>">
                            <a class="sidenav-item-link" href="<?= base_url('admin/konfigurasi'); ?>">
                                <i class="mdi mdi-square-edit-outline"></i>
                                <span class="nav-text">Konfigurasi</span>
                            </a>
                        </li>

                        <?php if ($user['level'] == 'Admin') : ?>
                            <li class="section-title">
                                Admin Page
                            </li>
                            <li class="<?php if ($menu == 'user') {
                                            echo "active";
                                        } ?>">
                                <a class="sidenav-item-link" href="<?= base_url('admin/user'); ?>">
                                    <i class="mdi mdi-account-group"></i>
                                    <span class="nav-text">User</span>
                                </a>
                            </li>
                            <li class="<?php if ($menu == 'RecentLogin') {
                                            echo "active";
                                        } ?>">
                                <a class="sidenav-item-link" href="<?= base_url('admin/RecentLogin'); ?>">
                                    <i class="mdi mdi-chart-bar"></i>
                                    <span class="nav-text">Recent Login</span>
                                </a>
                            </li>
                        <?php endif; ?>

                    </ul>

                </div>

            </div>
        </aside>