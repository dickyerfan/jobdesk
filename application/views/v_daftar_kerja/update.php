<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="row">
                            <div class="col-sm-3 text-right">
                                <img src="<?= base_url('assets/img/pdam_biru.png') ?>" alt="" style="width: 3rem;">
                            </div>
                            <div class="col-sm-9 mb-3">
                                <h2 class="text-gray-900 mb-2 text-uppercase"><?= $title; ?></h2>
                            </div>
                        </div>
                        <form method="post" action="<?= base_url('auth/update'); ?>" class="user">
                            <div class=" form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="nama_depan" name="nama_depan" placeholder="Nama Depan" value="<?= set_value('nama_depan'); ?>">
                                    <!-- <?= form_error('nama_depan', '<small class="text-danger">', '</small>'); ?> -->
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control form-control-user" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" value="<?= set_value('nama_belakang'); ?>">
                                    <!-- <?= form_error('nama_belakang', '<small class="text-danger">', '</small>'); ?> -->
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Nama Panggilan" value="<?= set_value('username'); ?>">
                                <!-- <?= form_error('username', '<small class="text-danger">', '</small>'); ?> -->
                            </div>
                            <div class=" form-group row">
                                <select class="custom-select" name="bagian" id="bagian" required>
                                    <option selected>Bagian / UPK</option>
                                    <option value="Langganan">Langganan</option>
                                    <option value="U m u m">U m u m</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="Pemeliharaan">Pemeliharaan</option>
                                    <option value="Perencanaan">Perencanaan</option>
                                    <option value="S P I">S P I</option>
                                    <option value="U P K">U P K</option>
                                    <option value="A M D K">A M D K</option>
                                </select>
                            </div>
                            <div class=" form-group row">
                                <select class="custom-select" name="sub_bagian" id="sub_bagian" required>
                                    <option selected>Sub Bagian / UPK</option>
                                    <option value="Langganan">Langganan</option>
                                    <option value="Penagihan">Penagihan</option>
                                    <option value="Umum">Umum</option>
                                    <option value="Administrasi">Administrasi</option>
                                    <option value="Personalia">Personalia</option>
                                    <option value="Keuangan">Keuangan</option>
                                    <option value="Kas">Kas</option>
                                    <option value="Pembukuan">Pembukuan</option>
                                    <option value="Rekening">Rekening</option>
                                    <option value="Pemeliharaan">Pemeliharaan</option>
                                    <option value="Peralatan">Peralatan</option>
                                    <option value="Perencanaan">Perencanaan</option>
                                    <option value="Pengawasan">Pengawasan</option>
                                    <option value="SPI">SPI</option>
                                    <option value="A M D K">A M D K</option>
                                    <option value="I T">I T</option>
                                    <option value="Bondowoso">Bondowoso</option>
                                    <option value="Sukosari 1">Sukosari 1</option>
                                    <option value="Maesan">Maesan</option>
                                    <option value="Tegalampel">Tegalampel</option>
                                    <option value="Tapen">Tapen</option>
                                    <option value="Prajekan">Prajekan</option>
                                    <option value="Tlogosari">Tlogosari</option>
                                    <option value="Wringin">Wringin</option>
                                    <option value="Curahdami">Curahdami</option>
                                    <option value="Tamanan">Tamanan</option>
                                    <option value="Tenggarang">Tenggarang</option>
                                    <option value="Tamankrocok">Tamankrocok</option>
                                    <option value="Wonosari">Wonosari</option>
                                    <option value="Sukosari 2">Sukosari 2</option>
                                </select>
                            </div>
                            <div class=" form-group row">
                                <select class="custom-select" name="jabatan" id="jabatan" required>
                                    <option selected>Jabatan</option>
                                    <option value="Kabag">Kabag</option>
                                    <option value="Ketua">Ketua</option>
                                    <option value="Ka UPK">Ka UPK</option>
                                    <option value="Manajer">Manajer</option>
                                    <option value="Kasubag">Kasubag</option>
                                    <option value="Pelaksana">Pelaksana</option>
                                    <option value="Anggota">Anggota</option>
                                    <option value="Staf">Staf</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                UPDATE
                            </button>
                        </form>
                        <div class="text-center">
                            <a class="small" href="<?= base_url('c_daftar_kerja/') ?>" style="text-decoration: none;">Batal Update!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>