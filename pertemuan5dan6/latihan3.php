<?php
// Array Numerik
// $mahasiswa = [
//     ["Budiono","1101161060","Teknik Informatika","budyfriend764@gmail.com"],
//     ["Haris","1101161061","Teknik Informatika","haris@gmail.com"],
//     ["Miftah","1101161063","Teknik Informatika","miftah@gmail.com"]
// ];

// Array Asosiatif ..
$mahasiswa = [
    [
    "nama" => "Budiono",
    "npm" => "1101161060",
    "email" => "budyfriend764@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "1.png"
    ],
    [
    "nama" => "Haris",
    "npm" => "1101161061",
    "email" => "budyfriend764@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "2.png"
    ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<!-- menggunakan foreaceh -->
    <h1>Daftar Mahaiswa</h1>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>    <li>
                <img src="img/<?= $mhs["gambar"];?>" alt="">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NPM : <?= $mhs["npm"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>