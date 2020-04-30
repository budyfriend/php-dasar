<?php
// koneksi database
$conn = mysqli_connect("localhost","root","","phpdasar");
// ambil data mahasiswa 
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
// ambil data dari tabel mahasiswa dari objrct result
// mysqli_fetch_row()
// mysqli_fetch_assoc()
// mysqli_fetch_array()
// mysqli_fetch_object()



// mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" callspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NPM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> | 
            <a href="">hapus</a>
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
    <?php endwhile; ?>
    </table>
</body>
</html>