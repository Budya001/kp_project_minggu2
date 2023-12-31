<?php
include ("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Halaman Umum</title>
</head>
<body>
    <div class="container">
        <nav class="navbar">
            <ul class="navbar-list">
                <img src="foto/logo1.png" alt="" style="padding-left :10px;">
                <li class="navbar-item" style="padding-left :20px;"><a href="hal_umum.php">PERPUSTAKAAN</a></li>
                <li class="navbar-item" style="padding-left :20px;"><a href="hal_umum.php">Home</a></li>
                <li class="navbar-item"><a href="about.php">About</a></li>
                <li class="navbar-item"><a href="contact.php">Contact</a></li>
                <li class="navbar-item" style="padding-left: 60%;"><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <div class="grid-container-umum">
        <div class="grid-item-umum">
            <nav class="navbar-umum">
                <ul class="navbar-list-umum">
                    <li class="navbar-item-umum">
                        <a href="berita.php">Berita</a>
                    </li>
                    <li class="navbar-item-umum">
                        <a href="data_buku.php">Daftar Buku</a>
                    </li>
                </ul>
            </nav>
            <div class="grid-boking">
                <div class="container3">
                    <h3>BOOKING</h3>
                    <form class="input-boking" method="POST" action="" name="myForm" onsubmit="return(validate());">
                    <?php
                        include("koneksi.php");
                        $nama = '';
                        $alamat = '';
                        $kategori = '';
                        $tanggal_dan_waktu = '';
                        $no_hp = '';
                        $file_ltps = '';
                        if (isset($_GET['id_booking'])) {
                            $ambil = mysqli_query($mysqli, 
                            "SELECT * FROM boking 
                            WHERE id_booking='" . $_GET['id_booking'] . "'");
                            while ($row = mysqli_fetch_array($ambil)) {
                                $nama = $row['nama'];
                                $alamat = $row['alamat'];
                                $kategori = $row['kategori'];
                                $tanggal_dan_waktu = $row['tanggal_dan_waktu'];
                                $no_hp = $row['no_hp'];
                                $file_ltps = $row['file_ltps'];
                            }
                        ?>
                            <input type="hidden" name="id" value="<?php echo
                            $_GET['id'] ?>">
                        <?php
                        }
                        ?>
                        <h4>Nama Instansi</h4>
                        <input type="text" name="nama" class="form_boking" id="inputNama" placeholder="Nama Instansi" required="required" value="<?php echo $nama?>">
                        <h4>Alamat</h4>
                        <input type="text" name="alamat" class="form_boking" id="inputAlamat" placeholder="Alamat" required="required" value="<?php echo $alamat?>">
                        <h4>Kategori</h4>
                        <h4><select class="select-boking" name="kategori" id="inputKategori" value="<?php echo $kategori?>">
                            <option disabled selected>Pilih</option>
                            </select>
                        <h4>Tanggal dan Waktu</h4>
                        <input type="datetime-local" name="tanggal_dan_waktu" id="inputTanggalDanWaktu" class="form_boking" required="required" value="<?php echo $tanggal_dan_waktu?>">
                        <h4>No HP</h4>
                        <input type="text" name="no_hp" class="form_boking" id="inputNoHp" placeholder="No HP" required="required" value="<?php echo $no_hp?>">
                        <h4>Surat LTPS</h4>
                        <input type="file" name="file_ltps" class="form_boking" id="inputFileLtps" required="required" value="<?php echo $file_ltps?>">
                        <button class="btn-boking" type="submit" name="simpan">BOOKING</button>
                    </form>
                </div>
            <div class="grid-item-boking">
                <h3 style="color: black;">TABEL BOOKING</h3>
                <table class="tab-boking" aria-colspan="2" >
                    <tr>
                        <th>Id</th>
                        <th>Nama Instansi</th>
                        <th>Alamat</th>
                        <th>Kategori</th>
                        <th>Tanggal dan Waktu</th>
                        <th>No HP</th>
                        <th>File LTPS</th>
                    </tr>
                    <?php
                            $result = mysqli_query($mysqli, "SELECT * FROM boking");
                            $no = 1;
                            while ($data = mysqli_fetch_array($result)){
                            ?>
                    <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td><?php echo $data['kategori'] ?></td>
                                <td><?php echo $data['tanggal_dan_waktu'] ?></td>
                                <td><?php echo $data['no_hp'] ?></td>
                                <td><?php echo $data['file_ltps'] ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                </table>
            </div>
            </div>

        </div>
        <div class="grid-item-umum">
            <nav class="navbar-umum">
                <ul class="navbar-list-umum">
                    <li class="navbar-item-umum">
                        <h7><script type="text/javascript">
                            window.onload = function() { jam(); }
                            function jam() {
                            var e = document.getElementById('jam'),
                            d = new Date(), h, m, s;
                            h = d.getHours();
                            m = set(d.getMinutes());
                            s = set(d.getSeconds());
                            e.innerHTML = h +':'+ m +':'+ s;
                            setTimeout('jam()', 1000);
                            }
                            function set(e) {
                            e = e < 10 ? '0'+ e : e;
                            return e;
                            }
                            var tanggallengkap = new String();
                            var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
                            namahari = namahari.split(" ");
                            var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
                            namabulan = namabulan.split(" ");
                            var tgl = new Date();
                            var hari = tgl.getDay();
                            var tanggal = tgl.getDate();
                            var bulan = tgl.getMonth();
                            var tahun = tgl.getFullYear();
                            tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
                            </script>

                            <span id='jam' style="font-size: 14px;" ></span> <script style="font-size: 12px;" language='JavaScript'>document.write(tanggallengkap);</script>
                    </li>
                </ul>
            </nav>
            <div class="jadwal" >
                <div class="container-umum">
                    <h3>Jadwal Booking</h3>
                    <p><li>mulai dari jam 07:00 - 14:00</li></p>
                </div>
                <div class="container-umum">
                    <h3>Jadwal Free Booking</h3>
                    <p><li>Dalam tahap pengembangan</li></p>
                </div>
                <div>
            </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['simpan'])) {
        if (isset($_POST['id_booking'])) {
            $ubah = mysqli_query($mysqli, "UPDATE boking SET 
                                            nama = '" . $_POST['nama'] . "',
                                            alamat = '" . $_POST['alamat'] . "',
                                            kategori = '" . $_POST['kategori'] . "',
                                            tanggal_dan_waktu = '" . $_POST['tanggal_dan_waktu'] . "',
                                            no_hp = '" . $_POST['no_hp'] . "',
                                            file_ltps = '" . $_POST['file_ltps'] . "'
                                            WHERE
                                            id_booking = '" . $_POST['id_booking'] . "'");
        } else {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $kategori = $_POST['kategori'];
            $tanggal_dan_waktu = $_POST['tanggal_dan_waktu'];
            $no_hp = $_POST['no_hp'];
            $file_ltps = $_POST['file_ltps'];
            $tambah = mysqli_query($mysqli, "INSERT INTO boking(nama,alamat,kategori,tanggal_dan_waktu,no_hp,file_ltps) 
                                            VALUES('$nama','$alamat','$kategori','$tanggal_dan_waktu','$no_hp','$file_ltps')");
        }

        echo "<script> 
                document.location='hal_umum.php';
                </script>";
    }

    if (isset($_GET['aksi'])) {
        if ($_GET['aksi'] == 'hapus') {
            $hapus = mysqli_query($mysqli, "DELETE FROM boking WHERE id_booking = '" . $_GET['id_booking'] . "'");
        } else if ($_GET['aksi'] == 'ubah_status') {
            $ubah_status = mysqli_query($mysqli, "UPDATE boking SET 
                                            status = '" . $_GET['status'] . "' 
                                            WHERE
                                            id_booking = '" . $_GET['id_booking'] . "'");
        }

        echo "<script> 
                document.location='hal_umum.php';
                </script>";
    }
    ?>
<!--Footer-->
<div class="footer">
<footer>
    <p>&copy; Copyright 2023 | Web Perpustakaan Provinsi Jawa Tengah</p>
</div>
</body>
</html>