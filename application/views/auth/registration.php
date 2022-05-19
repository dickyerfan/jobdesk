    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-4 col-lg-6 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-3">
                            <div class="row">
                                <div class="col-sm-4 text-right">
                                    <img src="<?= base_url('assets/img/pdam_biru.png') ?>" alt="" style="width: 3rem;">
                                </div>
                                <div class="col-sm-8">
                                    <h1 class="text-gray-900 mb-2">REGISTRASI</h1>
                                </div>
                            </div>
                            <form method="post" action="<?= base_url('auth/registration'); ?>" class="user">
                                <div class=" form-row">
                                    <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="nama_depan" name="nama_depan" placeholder="Nama Depan" value="<?= set_value('nama_depan'); ?>">
                                        <?= form_error('nama_depan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" placeholder="Nama Belakang" value="<?= set_value('nama_belakang'); ?>">
                                        <?= form_error('nama_belakang', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Nama Panggilan" value="<?= set_value('username'); ?>">
                                    <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class=" form-row">
                                    <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                        <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="password" class="form-control" id="password2" name="password2" placeholder="Password Konfirmasi">
                                        <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                        <select class="custom-select" name="bagian" id="bagian">
                                            <option value="">Bagian / UPK</option>
                                            <option value="Langganan">Langganan</option>
                                            <option value="U m u m">U m u m</option>
                                            <option value="Keuangan">Keuangan</option>
                                            <option value="Pemeliharaan">Pemeliharaan</option>
                                            <option value="Perencanaan">Perencanaan</option>
                                            <option value="S P I">S P I</option>
                                            <option value="U P K">U P K</option>
                                            <option value="A M D K">A M D K</option>
                                        </select>
                                        <?= form_error('bagian', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <select class="custom-select" name="sub_bagian" id="sub_bagian">
                                            <option value>Sub Bagian / UPK</option>
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
                                        <?= form_error('sub_bagian', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                        <select class="custom-select" name="jabatan" id="jabatan">
                                            <option value="">Jabatan</option>
                                            <option value="Kabag">Kabag</option>
                                            <option value="Ketua">Ketua</option>
                                            <option value="Ka UPK">Ka UPK</option>
                                            <option value="Manajer">Manajer</option>
                                            <option value="Kasubag">Kasubag</option>
                                            <option value="Pelaksana">Pelaksana</option>
                                            <option value="Anggota">Anggota</option>
                                            <option value="Staf">Staf</option>
                                        </select>
                                        <?= form_error('jabatan', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <select class="custom-select" name="agama" id="agama">
                                            <option value="">Agama</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Kepercayaan">Kepercayaan</option>
                                        </select>
                                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="NO HP/ WA" value="<?= set_value('no_hp'); ?>">
                                        <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" id="nik" name="nik" placeholder="N I K" value="<?= set_value('nik'); ?>">
                                        <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class=" form-row">
                                    <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                        <select class="custom-select" name="jenkel" id="jenkel">
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        <?= form_error('jenkel', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir" value="<?= set_value('tempat_lahir'); ?>">
                                        <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6 mb-3 mb-sm-0">
                                        <input class="form-control" placeholder="Tanggal Lahir :" readonly>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                                        <?= form_error('tgl_lahir', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    REGISTER
                                </button>
                            </form>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/') ?>" style="text-decoration: none;">Sudah Punya Akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>