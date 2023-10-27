<!-- ==================================== ——— PAGE WRAPPER ===================================== -->
<div class="page-wrapper">

    <!-- Header -->
    <header class="main-header" id="header">
        <nav class="navbar navbar-expand-lg navbar-light" id="navbar">
            <!-- Sidebar toggle button -->
            <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
            </button>

            <span class="page-title"><?= $title; ?></span>

            <div class="navbar-right ">

                <ul class="nav navbar-nav">
                    <!-- Offcanvas -->
                    <!-- <li class="custom-dropdown">
                                <a class="offcanvas-toggler active custom-dropdown-toggler" data-offcanvas="contact-off" href="javascript:">
                                    <i class="mdi mdi-contacts icon"></i>
                                </a> -->
                    </li>
                    <!-- User Account -->
                    <li class="dropdown user-menu">
                        <button class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="<?= base_url('assets/upload/profile/' . $user['image']); ?>" class="user-image rounded-circle" alt="User Image" />
                            <span class="d-none d-lg-inline-block"><?= $user['nama']; ?></span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <a class="dropdown-link-item" href="<?= base_url('admin/myprofile'); ?>">
                                    <i class="mdi mdi-account-outline"></i>
                                    <span class="nav-text">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-link-item" href="<?= base_url('admin/password'); ?>">
                                    <i class="mdi mdi-lock-outline"></i>
                                    <span class="nav-text">Password</span>
                                </a>
                            </li>

                            <li class="dropdown-footer">
                                <a class="dropdown-link-item" href="<?= base_url('admin/auth/logout') ?>">
                                    <i class="mdi mdi-logout"></i>
                                    <span class="nav-text">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


    </header>