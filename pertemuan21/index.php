<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


// koneksi database
require 'functions.php';
// ambil data mahasiswa 
$mahasiswa = query("SELECT * FROM mahasiswa");

// Tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>

<body>
    <div class="wrap">
        <div class="atas">
            <a href="cetak.php" target="_blank" class="btn btn-info">Cetak</a> <a href="logout.php" class="logout btn btn-dark">Logout</a>
        </div>
        <h1>Daftar Mahasiswa</h1>
        <a href="tambah.php" class="tambah btn btn-primary">Tambah Data Mahasiswa</a><br><br>

        <form action="" method="post" class="from-cari">
            <input type="text" id="keyword" name="keyword" size="40" autofocus placeholder="Masukan Keyword Pencarian..." autocomplete="off">
            <button type="submit" name="cari" id="tombol-cari">Cari</button>
            <img src="img/loading.gif" alt="" class="loader">
        </form><br>

        <div id="bungkus">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th class="aksi">Aksi</th>
                        <th>Gambar</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Jurusan</th>
                    </tr>
                </thead>
                <?php $i = 1; ?>
                <?php foreach ($mahasiswa as $row) : ?>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td class="aksi">
                                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                                <a href="hapus.php?id=<?= $row["id"]; ?>">hapus</a>
                            </td>
                            <td>
                                <img src="img/<?= $row["gambar"]; ?>" width="50" alt="">
                            </td>
                            <td><?= $row["npm"]; ?></td>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["email"]; ?></td>
                            <td><?= $row["jurusan"]; ?></td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                    </tbody>
            </table>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>