<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <h4 class="text-gray-900 mb-4 text-center">DAFTAR PEKERJAAN</h4>
                                <div class="row">
                                    <div class="col-sm-5 text-right">
                                        <img src="<?= base_url('assets/img/pdam_biru.png') ?>" alt="" style="width: 3rem;">
                                    </div>
                                    <div class="col-sm-7">

                                        <h1 class="text-gray-900 mb-4">LOGIN</h1>
                                    </div>

                                </div>
                                <?= $this->session->flashdata('message'); ?>
                                <?= $this->session->unset_userdata('message'); ?>
                                <form method="post" action="<?= base_url('auth'); ?>" class="user">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Nama Panggilan" value="<?= set_value('username') ?>">
                                        <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <!-- <div class="form-group">
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
                                    <div class="form-group">
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
                                    <div class="form-group">
                                        <select class="custom-select" name="bagian" id="bagian" required>
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
                                    </div> -->
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <br>
                                <div class=" small text-center" style="color: blue;">
                                    Belum punya akun..? <a href="<?= base_url() ?>/auth/registration" style="text-decoration: none;">Silakan Registrasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>