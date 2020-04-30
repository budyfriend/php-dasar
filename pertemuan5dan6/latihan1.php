<?php
// array
// cara lama 
$hari = array("senin","selasa","rabu");
// cara baru
$bulan = ["januari","februari","maret"];
$arr1 = [123,"tulisan",false];

// menampilkan array
// var_dup() / print_r()

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $arr1[0];
echo "<br>";
echo $bulan[1];
echo "<br>";

// menambahkan array
$hari[] = "Kamis";
var_dump($hari);

?>