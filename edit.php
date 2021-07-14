<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Data Karyawan</title>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">
            Data Karyawan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">HOME</a>
                    <a class="nav-link" href="logout.php">LOGOUT</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    include 'config.php';
    $id = $_GET['id'];
    $karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    
    while ($data = mysqli_fetch_assoc($karyawan)){
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Edit Karyawan / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                <p class="fw-bold">Profil Karyawan</p>
                </div>
                <div class="card-body fw-bold">                        
                    <form method="post" action="update.php">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">nama</label>
                            <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="<?php echo $data['nama']; ?>">                            
                        </div>
                        <div class="mb-3">
                            <label for="NIM" class="form-label">No_KTP</label>
                            <input type="text" class="form-control" id="No_KTP" placeholder="Masukkan No_KTP" name="No_KTP" value="<?php echo $data['No_KTP']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">No_Telp</label>
                            <input type="text" class="form-control" id="No_Telp" placeholder="Masukkan No_Telp" name="No_Telp" value="<?php echo $data['No_Telp']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Tahun_Masuk</label>
                            <input type="text" class="form-control" id="Tahun_Masuk" placeholder="Masukkan Tahun_Masuk" name="Tahun_Masuk" value="<?php echo $data['Tahun_Masuk']; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="JumlahMasaKerja" class="form-label">jumlah_masa_kerja</label>
                            <input type="text" class="form-control" id="jumlah_masa_kerja" placeholder="Masukkan jumlah_masa_kerja" name="jumlah_masa_kerja" value="<?php echo $data['jumlah_masa_kerja']; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div> 
    <?php   
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->

</html>