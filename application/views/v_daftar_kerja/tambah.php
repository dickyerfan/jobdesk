<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <a href="<?= base_url('c_daftar_kerja'); ?>"><button class="btn btn-primary mb-2">Kembali</button></a>
    <div class="row no-gutters">
        <div class="col-sm">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary text-center"><?= $title ?></h4>
                </div> -->
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="card bg-dark shadow-lg border-0 text-center text-light">
                                <div class="card-body">
                                    <h3>FORM TAMBAH PEKERJAAN</h3>
                                    <form action="<?= base_url('c_daftar_kerja/tambah') ?>" method="POST">
                                        <div class="form-group mb-1">
                                            <input type="text" class="form-control" name="name_task" placeholder="Input Pekerjaan" required>
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button type="submit" class="btn btn-dark">Tambah Pekerjaan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->