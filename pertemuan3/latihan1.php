<?php
// pengulangan;
// for, while, do.. while, foreach
for ($i = 0; $i < 5; $i++) {
    echo "Hello Word <br>";
}

// dicek dulu baru menampilkan
while ($i < 5) {
    echo "Hello Word <br>";
    $i++;
}

// tidak dicek langsung menampilkan
$i = 0;
do {
    echo "Hello Word <br>";
    $i++;
} while ($i < 5);
