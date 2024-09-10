<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh If Dua Kondisi</title>
</head>
<body>
<?php
    echo "***** Latihan IF Dua Kondisi *****<p>";

    $a = 80;
    $b = 70;

    echo "Nilai a = $a <br>";
    echo "Nilai b = $b <p>";
    
    if($a<$b)
        echo "Nilai a lebih kecil dari Nilai b";
    else
        echo "Nilai a lebih besar dari Nilai b";
?>
</body>
</html>