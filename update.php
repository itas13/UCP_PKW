<?php
include './config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$No_KTP = $_POST['No_KTP'];
$No_Telp = $_POST['No_Telp'];
$Tahun_Masuk = $_POST['Tahun_Masuk'];
$jumlah_masa_kerja = date("Y") - $Tahun_Masuk;

mysqli_query($koneksi, "update karyawan set nama = '$nama', No.KTP = '$No_KTP', No.Telp = '$No_Telp', Tahun_Masuk = '$Tahun_Masuk', jumlah_masa_kerja = '$jumlah_masa_kerja' where id = '$id'");

header("location:index.php");

?>