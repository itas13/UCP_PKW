<?php
//koneksi database
include './config.php';

//menangkap data id 
$id  = $_GET['id'];

//update data ke database
$karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");

while($data = mysqli_fetch_array($karyawan)){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title><?php echo $data['nama']?></title>
    </head>
    <body onload="window.print();">
        <div class="container mb-5">
            <p class="fw-bold">Profil Mahasiswa</p>
            <p>nama      : <?php echo $data['nama']?></p>
            <p>No_KTP       : <?php echo $data['No_KTP']?></p>
            <p>No_Telp    : <?php echo $data['No_Telp']?></p>
            <p>Tahun_Masuk    : <?php echo $data['Tahun_Masuk']?></p>
            <p>jumlah_masa_kerja    : <?php echo $data['jumlah_masa_kerja']?></p>
        </div>
    <?php 
}
?>
    <div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </div>
    </body>
    </html>