<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>UAS</title>
  </head>
  <body>
    <center><img src="/php - fazri/yayasan.jpg" alt="" style="width: 10rem">
    <h2>PENGGAJIHAN</h2>
    <h2>GURU/KARYAWAN YAYASAN ASSALAAM</h2>
    <form action="" method="post">
    <div class="card" style="width: 30rem;">
        <div class="card-header text-primary">Data Penggajihan</div>
        <div class="card-body">
            <table>
                <tr>
                    <td>NO</td>
                    <td>:</td>
                    <td><input class="form-control" type="number" name="no" id=""></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" name="nama" id=""></td>
                </tr>
                <tr>
                    <td>Unit Pendidikan</td>
                    <td>:</td>
                    <td>
                        <select name="unit" class="form-select" aria-label="Default select example">
                            <option value="Pilih Unit Pendidikan">Pilih Unit Pendidikan</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Gaji</td>
                    <td>:</td>
                    <td><input class="form-control" type="date" name="tanggal_gaji" id=""></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Gaji</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>
                        <select name="jabatan" class="form-select" aria-label="Default select example">
                            <option value="Pilih Jabatan">Pilih Jabatan</option>
                            <option value="Kepala Sekolah">Kepala Sekolah</option>
                            <option value="Wakasek">Wakasek</option>
                            <option value="Guru">Guru</option>
                            <option value="Karyawan">Karyawan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Lama Kerja</td>
                    <td>:</td>
                    <td><input class="form-control" type="text" name="lama_kerja" id=""></td>
                </tr>
                <tr>
                    <td>Status Kerja</td>
                    <td>:</td>
                    <td>
                        <select name="status_kerja" class="form-select" aria-label="Default select example">
                            <option value="Pilih Status">Pilih Status</option>
                            <option value="Tetap">Tetap</option>
                            <option value="Kontrak">Kontrak</option>
                        </select>
                    </td>
                </tr>
                <tr rowspan="2">
                    <td></td>
                    <td>Potongan</td>
                    <td></td>
                </tr>
                <tr>
                    <td>BPJS</td>
                    <td>:</td>
                    <td><input class="form-control" type="number" name="bpjs" id=""></td>
                </tr>
                <tr>
                    <td>Pinjaman</td>
                    <td>:</td>
                    <td><input class="form-control" type="number" name="pinjaman" id=""></td>
                </tr>
                <tr>
                    <td>Cicilan</td>
                    <td>:</td>
                    <td><input class="form-control" type="number" name="cicilan" id=""></td>
                </tr>
                <tr>
                    <td>Lainnya</td>
                    <td>:</td>
                    <td><input class="form-control" type="number" name="lainnya" id=""></td>
                </tr>
            </table>
            <br>
            <center><input type="submit" class="btn btn-primary" value="Kirim" name="kirim"></center>
        </div>
    </div>
    </form>
    </center>
    <br><br>
    <?php

if (isset($_POST['kirim'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tanggal_gaji = $_POST['tanggal_gaji'];
    $jabatan = $_POST['jabatan'];
    $lama_kerja = $_POST['lama_kerja'];
    $status_kerja = $_POST['status_kerja'];
    $bpjs = $_POST['bpjs'];
    $pinjaman = $_POST['pinjaman'];
    $cicilan = $_POST['cicilan'];
    $lainnya = $_POST['lainnya'];

    echo "<center><h3>Penggajihan Karyawan</center></h3><br>";

    class gaji_karyawan
    {

        public $gaji;
        public $bonus;
        public $gaji_bersih;

        public function Penggajihan($nama, $no, $unit, $tanggal_gaji)
        {
            echo "No : $no <br>";
            echo "Nama Karyawan : $nama <br>";
            echo "Unit Pendidikan : $unit <br>";
            echo "Tanggal Gaji : $tanggal_gaji <br>";
        }
        public function gaji($jabatan, $lama_kerja, $status_kerja)
        {
            echo "Jabatan : $jabatan<br>";
            if ($jabatan == "Kepala Sekolah") {
                $this->gaji = 10000000;
            } elseif ($jabatan == "Wakasek") {
                $this->gaji = 7000000;
            } elseif ($jabatan == "Guru") {
                $this->gaji = 5000000;
            } elseif ($jabatan == "Karyawan") {
                $this->gaji = 2500000;
            } else {
                $this->gaji = 0;
            }
            echo "Gaji Pokok : RP." . number_format($this->gaji) . "<br>";
            echo "Lama Kerja : $lama_kerja <br>";
            echo "Status Kerja : $status_kerja <br>";
            if ($status_kerja == "Tetap") {
                $this->bonus = 1000000;
            } else {
                $this->bonus = 0;
            }
            echo "Bonus : " . number_format($this->bonus) . "<br>";
        }
        public function potongan($bpjs, $pinjaman, $cicilan, $lainnya)
        {
            echo "BPJS : RP. " . number_format($bpjs) . "<br>";
            echo "Pinjaman : RP. " . number_format($pinjaman) . "<br>";
            echo "Cicilan : RP." . number_format($cicilan) . "<br>";
            echo "Lainnya : RP. " . number_format($lainnya) . "<br>";
            $this->gaji_bersih = ($this->gaji + $this->bonus) - ($bpjs - $pinjaman - $cicilan - $lainnya);
            echo "Total Gaji Bersih : RP." . number_format($this->gaji_bersih);
        }
    }

    $cetak = new gaji_karyawan();

    ?>
<center>
<div class="card" style="width: 25rem;">
    <div class="card-header text-primary"><?php echo "$nama"; ?></div>
    <div class="card-body">
        <table>
            <tr>
                <td><?php echo $cetak->penggajihan($nama, $no, $unit, $tanggal_gaji); ?></td>
            </tr>
            <tr>
                <td><?php echo $cetak->gaji($jabatan, $lama_kerja, $status_kerja); ?></td>
            </tr>
            <tr>
                <td><?php echo $cetak->potongan($bpjs, $pinjaman, $cicilan, $lainnya); ?></td>
            </tr>
        </table>
    </div>
</div>
</center><br>
<?php
}?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
