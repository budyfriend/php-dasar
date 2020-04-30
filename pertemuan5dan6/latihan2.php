<?php
$angka = [3,2,15,20,11,77,89,10,11,77,89,10];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latian 2</title>
    <style>
        .kotak{
            width : 50px;
            height : 50px;
            background-color : salmon;
            text-align : center;
            line-height : 50px;
            margin : 3px;
            float : left;
            /* menjajarnya sebelah kanan */
        }
        .clear {
            clear : both;
            /* untuk membersihkan floatnya */
        }
    </style>
</head>
<body>
<!-- for -->
    <?php for($i = 0; $i < count($angka); $i++) : ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php endfor; ?>

<!-- supaya turun kebawah -->
    <div class="clear"></div>
    
<!-- foreach -->
    <!-- jamak dan singular -->
    <?php foreach($angka as $a) : ?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>