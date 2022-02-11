<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->
    <a href="<?= base_url('hello/tambah'); ?>"><button class="btn btn-primary mb-2">Daftar Pekerjaan</button></a>
    <a href="<?= base_url('hello/tambah'); ?>"><button class="btn btn-primary mb-2">Download Pekerjaan</button></a>
    <a href="<?= base_url('c_daftar_kerja/tambah'); ?>"><button class="btn btn-primary mb-2">Tambah Pekerjaan</button></a>
    <div class="row no-gutters">
        <div class="col-sm">
            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary text-center"><?= $title ?></h4>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->