<?php
require 'koneksi.php';
$pelanggan = query("SELECT * FROM pelanggan");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental Playstation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Playstation Rental</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="row">
            <h2>Data Pelanggan</h2>
            <div class="col">
                <a href="tambah.php" class="btn btn-success">Tambah</a>
                <table class="table table-bordered mt-2">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Game</th>
                            <th scope="col">Waktu Main</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        <?php foreach ($pelanggan as $data) : ?>
                            <tr>
                                <th scope="row"><?= $no++ ?></th>
                                <td><?= $data["nama_pelanggan"] ?></td>
                                <td><?= $data["game"] ?></td>
                                <td><?= $data["waktu_main"] ?></td>
                                <td><?= $data["harga"] ?></td>
                                <td><a href="ubah.php?id=<?= $data["id_pelanggan"] ?>" class="btn btn-warning">Ubah</a> <a href="hapus.php?id=<?= $data["id_pelanggan"] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>