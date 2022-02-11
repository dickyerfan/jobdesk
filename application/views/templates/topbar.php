<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <form class="d-none d-sm-inline-block form-inline ml-md-3 my-md-0">
                <img src="<?= base_url('assets/img/pdam_biru.png'); ?>" alt="" style="width: 40px;">
            </form>
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-md-0">
                <h4>PDAM BONDOWOSO</h4>
            </form>
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $user['nama_depan'] . " " . $user['nama_belakang']; ?></span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" style="color: blue;">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Bagian : <?= $user['bagian'] ?>
                        </a>
                        <a class="dropdown-item" href="#" style="color: blue;">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Jabatan : <?= $user['jabatan'] . ' - ' . $user['sub_bagian'] ?>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Ganti Password
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                            Profil
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->