<?php
$table = $_SESSION['username'];
$nama = $_SESSION['username'];

$tgl = date('d');
$bln = date('m');
$thn = date('Y');

switch ($bln) {
    case '1':
        $bln = "Januari";
        break;
    case '2':
        $bln = "Februari";
        break;
    case '3':
        $bln = "Maret";
        break;
    case '4':
        $bln = "April";
        break;
    case '5':
        $bln = "Mei";
        break;
    case '6':
        $bln = "Juni";
        break;
    case '7':
        $bln = "Juli";
        break;
    case '8':
        $bln = "Agustus";
        break;
    case '9':
        $bln = "September";
        break;
    case '10':
        $bln = "Oktober";
        break;
    case '11':
        $bln = "Nofember";
        break;
    case '12':
        $bln = "Desember";
        break;
}

$nik_baru = $_SESSION['nik'];
$nik_pecah = str_split($nik_baru);
$nik_baru = $nik_pecah[0] . $nik_pecah[1] . $nik_pecah[2] . ' ' . $nik_pecah[3] . $nik_pecah[4] . ' ' . $nik_pecah[5] . $nik_pecah[6] . $nik_pecah[7];
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
    <style>
        .font {
            font-size: 0.8rem;
        }

        .logo {
            display: none;
        }

        @media print {

            .navigasi {
                display: none;
            }

            #accordionSidebar {
                display: none;
            }

            #tanya {
                display: none;
            }

            .logo {
                display: block;
            }
        }
    </style>
</head>

<body id="page-top" onload="waktu()">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navigasi navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
                <a class="nav-link" href="" id="cetak"><i class="fas fa-fw fa-user-plus"></i> Cetak File
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="" id="belum"><i class="fas fa-fw fa-list-alt"></i> Pilih Bulan & Tahun
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('c_selesai'); ?>"><i class="fas fa-fw fa-check-square"></i> Kembali
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
                <nav class="navigasi navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

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
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
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

                <!-- Begin Page Content -->
                <div class="container-fluid" id="tanya">
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="card bg-dark shadow-lg border-0 text-center text-light">
                                <div class="card-body">
                                    <h3>Pilih Bulan</h3>
                                    <form action="<?= base_url('c_cetak'); ?>" method="POST">
                                        <div class="form-group">
                                            <select name="bulan" class="custom-select mb-1">
                                                <option value="">Bulan</option>
                                                <option value="01">Januari</option>
                                                <option value="02">Februari</option>
                                                <option value="03">Maret</option>
                                                <option value="04">April</option>
                                                <option value="05">Mei</option>
                                                <option value="06">Juni</option>
                                                <option value="07">Juli</option>
                                                <option value="08">Agustus</option>
                                                <option value="09">September</option>
                                                <option value="10">Oktober</option>
                                                <option value="11">Nofember</option>
                                                <option value="12">Desember</option>
                                            </select>
                                            <select name="tahun" class="custom-select">
                                                <?php
                                                $mulai = date('Y') - 1;
                                                for ($i = $mulai; $i < $mulai + 100; $i++) {
                                                    $sel = $i == date('Y') ? ' selected="selected"' : '';
                                                    echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" name="add_post" id="tombol_pilih" class="btn btn-block btn-dark">Pilih</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="logo container-fluid">
                    <div class="row">
                        <div class="col-sm-6 font">
                            <p class="mb-0">Perusahaan Daerah Air Minum</p>
                            <p class="mb-0">Kabupaten Bondowoso</p>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
                <h4 class="logo text-center">DAFTAR PEKERJAAN <?php echo $_SESSION['sub_bagian'] ?><br>
                </h4>
                <!-- /.container-fluid -->
            </div>
            <div class="container-fluid" id="tabel">
                <table class="table table-sm table-hover table-bordered border-dark">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center font" width=5%>No</th>
                            <th scope="col" class="text-center font" width=60%>Nama Pekerjaan</th>
                            <th scope="col" class="text-center font" width=10%>Status</th>
                            <th scope="col" class="text-center font" width=25%>Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($cetak as $row) : ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>testing</td>
                                <td>Selesai</td>
                                <td>10 Januari 2022</td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>


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
        const tanya = document.getElementById('tanya');
        const tombol_belum = document.getElementById('belum');
        const tombol_pilih = document.getElementById('tombol_pilih');
        const tabel = document.getElementById('tabel');
        const cetak = document.getElementById('cetak');

        // tombol_belum.addEventListener('click', function() {
        //     if (tanya.style.display == "none") {
        //         tanya.style.display = "block";
        //     }
        // });
        tombol_pilih.addEventListener('click', function() {
            if (tanya.style.display == "block") {
                tanya.style.display = "none";
            }
        });
        cetak.addEventListener('click', function() {
            window.print();
        })
    </script>
</body>

</html>