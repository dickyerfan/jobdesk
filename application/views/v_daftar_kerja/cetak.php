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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/print.css">
    <style>
        .font {
            font-size: 0.8rem;
        }

        .logo {
            display: none;
        }

        @media print {

            .header,
            .navbar1 {
                display: none;
            }

            .logo {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand text-light" href="#"><?= $title; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" id="cetak" href="#">Cetak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" id="belum" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Pilih Bulan dan Tahun">Pilih Periode</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?= base_url('c_selesai') ?>" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Kembali ke Pekerjaan Selesai">Kembali</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <br>
    <div class="container-fluid" id="tanya" style="display: none;">
        <div class="row justify-content-center">
            <div class="col-sm-3">
                <div class="card bg-dark shadow-lg border-0 text-center text-light">
                    <div class="card-body">
                        <h3>Pilih Bulan</h3>
                        <form action="<?= base_url('c_cetak') ?>" method="POST">
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
                    <?php
                    $tgls = strtotime($row->date_task2);
                    $tanggal = date('d', $tgls);
                    $bulan = date('m', $tgls);
                    $tahun = date('Y', $tgls);

                    switch ($bulan) {
                        case '1':
                            $bulan = "Januari";
                            break;
                        case '2':
                            $bulan = "Februari";
                            break;
                        case '3':
                            $bulan = "Maret";
                            break;
                        case '4':
                            $bulan = "April";
                            break;
                        case '5':
                            $bulan = "Mei";
                            break;
                        case '6':
                            $bulan = "Juni";
                            break;
                        case '7':
                            $bulan = "Juli";
                            break;
                        case '8':
                            $bulan = "Agustus";
                            break;
                        case '9':
                            $bulan = "September";
                            break;
                        case '10':
                            $bulan = "Oktober";
                            break;
                        case '11':
                            $bulan = "Nofember";
                            break;
                        case '12':
                            $bulan = "Desember";
                            break;
                    }
                    ?>
                    <tr>
                        <td class="text-center"><?= $no++ ?></td>
                        <td><?= $row->name_task; ?></td>
                        <td class="text-center"><?= $row->status_task2; ?></td>
                        <td class="text-center"><?= $tanggal . " " . $bulan . " " . $tahun; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container logo">
        <div class="row">
            <div class="col-sm-6"></div>
            <div class="col-sm-6 text-center">
                <h6 class="font">Bondowoso, <?php echo $tgl . " " . $bln . " " . $thn; ?></h6>
                <h6 class="ttd mb-0 font">Dibuat Oleh :</h6>
                <h6 class="font"><?php echo $_SESSION['jabatan'] . ' ' . $_SESSION['sub_bagian'] ?></h6>
                <br><br>
                <h6 class="mb-0 font"><u><?php echo $_SESSION['nama_depan'] . ' ' . $_SESSION['nama_belakang']; ?></u></h6>
                <h6 class="font">Nik. <?php echo $nik_baru; ?></h6>
            </div>
        </div>
    </div>

    <script>
        const tanya = document.getElementById('tanya');
        const tombol_belum = document.getElementById('belum');
        const tombol_pilih = document.getElementById('tombol_pilih');
        const tabel = document.getElementById('tabel');
        const cetak = document.getElementById('cetak');

        cetak.addEventListener('click', function() {
            window.print();
        })

        tombol_belum.addEventListener('click', function() {
            if (tanya.style.display == "none") {
                tanya.style.display = "block";
            }
        });
        tombol_pilih.addEventListener('click', function() {
            if (tanya.style.display == "block") {
                tanya.style.display = "none";
            }
        });
    </script>

    <script src="js/bootstrap.bundle.js" crossorigin="anonymous"></script>
</body>

</html>