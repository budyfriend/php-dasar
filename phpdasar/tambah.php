<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';
if (isset($_POST["submit"])) {
    // var_dump($_POST);
    // var_dump($_FILES);
    // die;

    // CEK APAKAH DATA BERHASIL DI TAMBAHKAN ATAU TIDAK
    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php'
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan');
            document.location.href = 'index.php'
        </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tambah Data Mahasiswa</title>
</head>

<body>
    <div class="wrap">
        <h1>Tambah Data Mahasiswa</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td> <label for="npm">NPM</label></td>
                    <td>:</td>
                    <td><input size="60%" type="text" name="npm" id="npm" required></td>
                </tr>
                <tr>
                    <td><label for="nama">Nama</label></td>
                    <td>:</td>
                    <td><input size="60%" type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td><label for="email">E-mail</label></td>
                    <td>:</td>
                    <td><input size="60%" type="text" name="email" id="email"></td>
                </tr>
                <tr>
                    <td><label for="jurusan">Jurusan</label></td>
                    <td>:</td>
                    <td><input size="60%" type="text" name="jurusan" id="jurusan"></td>
                </tr>
                <tr>
                    <td><label for="gambar">Gambar</label></td>
                    <td>:</td>
                    <td><input size="60%" type="file" name="gambar" id="gambar"></td>
                </tr>
                <tr>
                    <td colspan="3"><button class="btn btn-success suc" type="submit" name="submit">Tambah Data!</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>