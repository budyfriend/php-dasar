<?php
// variabel scope
// $x = 10;
// function tampil(){
//     global $x;
//     echo $x;
// }
// tampil();
// $_GET["nama"] = "Budiono";
// $_GET["npm"] = "110111060";
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
    "email" => "Haris@gmail.com",
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
    <ul> 
    <?php foreach($mahasiswa as $mhs) : ?>   
            <li><a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&npm=<?=$mhs["npm"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>