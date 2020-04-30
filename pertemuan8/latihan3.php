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
    <title>POST</title>
</head>
<body>
<!-- menggunakan foreaceh -->
    <!-- <h1>POST</h1> -->
    <?php if (isset($_POST["submit"])): ?>
        <h1>Selamat Datang <?= $_POST["nama"]; ?></h1>
    <?php endif; ?>
    
    <form action="" method="POST">
    Masukan Nama : 
    <input type="text" name="nama" id="nama">
    <br>
    <button type="submit" name="submit">Kirim!</button>
    </form>
    
</body>
</html>