<?php
include './config.php';

$nama = $_POST['nama'];
$No_KTP = $_POST['No_KTP'];
$No_Telp = $_POST['No_Telp'];
$Tahun_Masuk = $_POST['Tahun_Masuk'];
$jumlah_masa_kerja = date("Y") - $_POST['Tahun_Masuk'];

mysqli_query($koneksi, "insert into karyawan values('','$nama','$No_KTP','$No_Telp','$Tahun_Masuk','$jumlah_masa_kerja')");

header("location:/index.php");