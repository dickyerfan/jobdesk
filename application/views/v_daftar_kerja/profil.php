<?php
$nik_baru = $_SESSION['nik'];
$nik_pecah = str_split($nik_baru);
$nik_baru = $nik_pecah[0] . $nik_pecah[1] . $nik_pecah[2] . ' ' . $nik_pecah[3] . $nik_pecah[4] . ' ' . $nik_pecah[5] . $nik_pecah[6] . $nik_pecah[7];
$tanggal_lahir = date('d', strtotime($_SESSION['tgl_lahir']));
$bulan_lahir = date('m', strtotime($_SESSION['tgl_lahir']));
$tahun_lahir = date('Y', strtotime($_SESSION['tgl_lahir']));

switch ($bulan_lahir) {
    case '01':
        $bulan_lahir = 'Januari';
        break;
    case '02':
        $bulan_lahir = 'Februari';
        break;
    case '03':
        $bulan_lahir = 'Maret';
        break;
    case '04':
        $bulan_lahir = 'April';
        break;
    case '05':
        $bulan_lahir = 'Mei';
        break;
    case '06':
        $bulan_lahir = 'Juni';
        break;
    case '07':
        $bulan_lahir = 'Juli';
        break;
    case '08':
        $bulan_lahir = 'Agustus';
        break;
    case '09':
        $bulan_lahir = 'September';
        break;
    case '10':
        $bulan_lahir = 'Oktober';
        break;
    case '11':
        $bulan_lahir = 'Nofember';
        break;
    case '12':
        $bulan_lahir = 'Desember';
        break;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template -->
    <link href="<?= base_url() ?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url() ?>/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script>
        window.setTimeout("waktu()", 1000);

        function waktu() {
            let waktu = new Date();
            setTimeout("waktu()", 1000);
            let t = waktu.getDate();
            let b = waktu.getMonth(); // jika menggunakan array
            // let b = waktu.getMonth() + 1;  // jika menggunakan switch
            let y = waktu.getFullYear();
            let h = waktu.getHours();
            let m = waktu.getMinutes();
            let s = waktu.getSeconds();

            t = checkTime(t);
            h = checkTime(h);
            m = checkTime(m);
            s = checkTime(s);

            let b_arr = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
                "Nofember", "Desember"
            ];
            b = b_arr[b];

            document.getElementById("jam").innerHTML = t + "  " + b + "  " + y + " | " + h + " : " + m + " : " + s + " WIB";
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            }; // add zero in front of numbers < 10
            return i;
        }
    </script>
</head>

<body id="page-top" onload="waktu()">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <!-- <i class="fas fa-user"></i> -->
                    <img src="<?= base_url('assets/img/pdam_biru.png'); ?>" alt="" style="width: 40px;">
                </div>
                <div class="sidebar-brand-text mx-3">PDAM BWS</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-uppercase font-weight-bold"><?= $title; ?></span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <h5>Menu</h5>
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('c_daftar_kerja') ?>"><i class="fas fa-fw fa-list-alt"></i> Kembali
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <!-- <div class="sidebar-heading">
                Addons
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-2 my-2 my-md-0 mw-100">
                        <h6 class="mt-2 text-dark">Bagian : <?= $user['bagian']; ?></h6>
                    </div>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <div class="d-none d-sm-inline-block form-inline mr-auto">
                        <h6 class="mt-2 text-dark">Jabatan : <?= $user['jabatan'] . " - " . $user['sub_bagian']; ?></h6>
                    </div>
                    <div class="topbar-divider d-none d-sm-block"></div>
                    <h6 class="mt-2 text-dark" id="jam"></h6>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600"><?= $user['nama_depan'] . " " . $user['nama_belakang']; ?></span>
                                <img class="img-profile rounded-circle" src="<?= base_url() ?>/assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('c_password'); ?>">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Password
                                </a>
                                <a class="dropdown-item" href="<?= base_url('c_profil') ?>">
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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                <?= $user['nama_depan'] . " " . $user['nama_belakang']; ?>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                BAGIAN - <?= $user['bagian']; ?>
                                            </div>
                                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                                JABATAN - <?= $user['jabatan'] . " " . $user['sub_bagian']; ?>
                                            </div>
                                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                                NIK : <?= $nik_baru; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                            <img src="<?= base_url('assets/img/pdam_biru.png') ?>" alt="" style="width: 7rem;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                                                <?= $user['tempat_lahir']; ?>
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?= ucwords($tanggal_lahir . ' ' . $bulan_lahir . ' ' . $tahun_lahir); ?>
                                            </div>
                                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                                <?= $user['jenkel']; ?>
                                            </div>
                                            <div class="h6 mb-0 font-weight-bold text-gray-800">
                                                <?= $user['agama']; ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <img src="<?= base_url('assets/img/pdam_biru.png') ?>" alt="" style="width: 7rem;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row justify-content-center">
                        <div class="col-lg-6">


                            <div class="card shadow mb-4">

                                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                    <h6 class="m-0 font-weight-bold text-primary">Collapsable Card Example</h6>
                                </a>

                                <div class="collapse show" id="collapseCardExample">
                                    <div class="card-body">
                                        This is a collapsable card example using Bootstrap's built in collapse
                                        functionality. <strong>Click on the card header</strong> to see the card body
                                        collapse and expand!
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div> -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Pdam Bondowoso 2022</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Mau Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" Jika anda yakin mau keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>/assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url() ?>/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>/assets/js/demo/datatables-demo.js"></script>

    <script>
        const proses = document.querySelectorAll('.proses');
        for (let i = 0; i < proses.length; i++) {
            proses[i].addEventListener('mouseover', function() {
                proses[i].innerHTML = "Pekerjaan Selesai";
            });
            proses[i].addEventListener('mouseleave', function() {
                proses[i].innerHTML = "Proses";
            });
        }
    </script>
</body>

</html>