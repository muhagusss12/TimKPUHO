<?php

include "koneksi.php";
$id = $_GET['id'];
$query = "DELETE FROM tb_agenda WHERE id='$id'";
$sql = mysqli_query($konek, $query);
if ($sql) {
    header("location: index.php");
}
