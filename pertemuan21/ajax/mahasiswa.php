<?php
// sleep(1);
usleep(500000);
require '../functions.php';
$keyword = $_GET['keyword'];
$query = "SELECT * FROM mahasiswa
            WHERE 
            npm LIKE '%$keyword%' OR
            nama LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            jurusan LIKE '%$keyword%'
            ";
$mahasiswa = query($query);
?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>No.</th>
            <th>Aksi</th>
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
                <td>
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