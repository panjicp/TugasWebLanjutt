<?php
require 'koneksi.php';

$id = $_GET["id"];

$pelanggan = query("SELECT * FROM pelanggan WHERE id_pelanggan = $id")[0];

if (isset($_POST["submit"])) {
    global $conn;

    $nama = $_POST["nama"];
    $game = $_POST["game"];
    $waktu = $_POST["waktu"];

    if ($waktu == "1 Jam") {
        $harga = 5000;
    } else if ($waktu == "2 Jam") {
        $harga = 10000;
    } else {
        $harga = 15000;
    }

    $sql = "UPDATE pelanggan SET nama_pelanggan = '$nama', game = '$game', waktu_main = '$waktu', harga = '$harga' WHERE id_pelanggan = $id";
    mysqli_query($conn, $sql);

    header("Location:index.php");

    return mysqli_affected_rows($conn);
}
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
    <div class="container">
        <h2 class="text-center mt-3">Ubah Data</h2>
        <div class="row justify-content-center mt-3">
            <div class="col-5">
                <form method="post">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $pelanggan["nama_pelanggan"] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="game" class="form-label">Game</label>
                        <select class="form-select" name="game">
                            <option selected value="<?= $pelanggan["game"] ?>"><?= $pelanggan["game"] ?></option>
                            <option value="God Of War">God Of War</option>
                            <option value="Assassin Creed">Assassin Creed</option>
                            <option value="Far Cry 6">Far Cry 6</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu Main</label>
                        <select class="form-select" name="waktu">
                            <option selected value="<?= $pelanggan["waktu_main"] ?>"><?= $pelanggan["waktu_main"] ?></option>
                            <option value="1 Jam">1 Jam</option>
                            <option value="2 Jam">2 Jam</option>
                            <option value="3 Jam">3 Jam</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>