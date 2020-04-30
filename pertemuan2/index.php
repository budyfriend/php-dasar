<?php
/*
ini komentar
*/
// Standar Output
// echo, print
// print_r
// var_dump

// variabel dan tipe data
$nama = " Budiono";
echo 'Helo, nama saya $nama ';
echo "Helo, nama saya $nama ";

// Operator
// aritmatika : + - * / %
$x = 10;
$y = 20;
echo $x * $y;

// penggabungan string / concatenation / concat
// .
$nama_depan = " Nirwan";
$nama_belakang = "Maulana";
echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 10;
$x += 20;
echo $x;

$nama = " Nirwan";
$nama .= " ";
$nama .= "Maulana";
echo $nama;

// Perbandingan 
// <, >, <=, >=, ==, !=
var_dump(1 == "1");

// identitas
//  ===, !==

// opertor logika
// &&, ||, !
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style/bootstrap.min.css">
</head>

<body>
    <!-- 1. PHP didalam HTML yang digunakan yang pertama -->
    <h1>Halo, Selamat Datang <?php echo $nama; ?></h1>

    <!-- 2. HTML didalam PHP -->
    <?php
    echo "<h1>Halo, Selamat Datang Budiono</h1>"
    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/popper.min.js"></script>
</body>

</html>