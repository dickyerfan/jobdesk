<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url(); ?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
                            <a href="<?= base_url('c_daftar_kerja'); ?>"><button class="btn btn-primary mb-2">Daftar Tunggu Pekerjaan</button></a>
                            <a href="<?= base_url('c_daftar_kerja/tambah'); ?>"><button class="btn btn-primary mb-2">Tambah Pekerjaan</button></a>
                            <a href="#"><button class="btn btn-primary mb-2">View Pekerjaan</button></a>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="edit card bg-primary shadow-lg border-0 text-center">
                                <div class="card-body">
                                    <ul class="list-group text-left">
                                        <li class="list-group-item text-primary text-uppercase font-weight-bold">
                                            <div style="float: left;">No</div>
                                            <div style="float: left; margin-left:50px">Jenis Pekerjaan</div>
                                            <div style="float: right; margin-right:30px">Aksi</div>
                                        </li>
                                        <?php
                                        $no = 1;
                                        foreach ($selesai as $row) : ?>
                                            <?php $date_task2 = strtotime($row->date_task2); ?>
                                            <li class="list-group-item">
                                                <div style="float: left;"><?php echo $no++; ?></div>
                                                <div style="float: left; margin-left:50px"><?php echo $row->name_task; ?></div>
                                                <div style="float: right;">
                                                    <span class="badge bg-success text-light">Selesai</span>
                                                    <span class="badge bg-danger" style="color: white;"><?= date('d M Y', $date_task2); ?></span>
                                                </div>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th class="text-center">JENIS PEKERJAAN</th>
                                                    <th class="text-center">ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                foreach ($pekerjaan as $kerja) :
                                                ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $kerja->name_task ?></td>
                                                        <td class="text-center">
                                                            <a href="<?= base_url('c_daftar_kerja'); ?><?= $kerja->id_task; ?>"><span class="proses badge badge-primary">Proses</span></a>
                                                            <a href="<?= base_url(); ?>hello/hapus/<?= $kerja->id_task; ?>"><span class="badge badge-danger" onclick="return confirm('Yakin mau dihapus?');">Delete</span></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div> -->
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <!-- <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; DIE Arts Production 2022</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

    <script>
        $('.custom-file-input').on('change', function() {
            let filename = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(filename);
        });




        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "<?= base_url('admin/changeaccess'); ?>",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                }
            });
        });


        const proses = document.querySelectorAll('a .proses');
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