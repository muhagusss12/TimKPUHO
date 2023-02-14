<?php
include 'koneksi.php';
if (isset($_POST['btnTambah'])) {
    $tglkegiatan = $_POST['tglkegiatan'];
    $agenda = $_POST['agenda'];
    $penyelenggara = $_POST['penyelenggara'];
    $peserta = $_POST['peserta'];
    $notulen = $_POST['notulen'];
    $dokumentasi = $_POST['dokumentasi'];

    $query = mysqli_query($konek, "INSERT INTO `tb_agenda` (`tanggal`, `agenda`, `penyelenggara`, `peserta`, `notulen`, `dokumentasi`) VALUES ('$tglkegiatan', '$agenda', '$penyelenggara', '$peserta', '$notulen', '$dokumentasi');");

    if ($query == 1) {
        header('location:index.php');
    }
}
