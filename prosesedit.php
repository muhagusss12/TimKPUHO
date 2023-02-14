<?php

include "koneksi.php";
if (isset($_POST['btnEdit'])) {
    $id = $_GET['id'];
    //$query = "UPDATE tb_agenda SET tanggal='$tglkegiatan',agenda='$agenda',penyelenggara='$penyelenggara',peserta='$peserta',notulen='$notulen',dokumentasi='$dokumentasi' WHERE id='$id'";
    $query = "SELECT * FROM tb_agenda WHERE id='$id'";
    $sql = mysqli_query($konek, $query);
    $data = mysqli_fetch_array($sql);

    $tglkegiatan = $data['tglkegiatan'];
    $agenda = $data['agenda'];
    $penyelenggara = $data['penyelenggara'];
    $peserta = $data['peserta'];
    $notulen = $data['notulen'];
    $dokumentasi = $data['dokumentasi'];

    if ($sql) {
        header("location: index.php");
    }
}
