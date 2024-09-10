<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Segitiga</title>
</head>
<body>
    <font face = "courier new" size = 3>
        <h1>***** HASIL PERHITUNGAN *****</h1><p>
        <hr width = 500 color = blue align = left>
        <?php
            // Pembuatan Variable
            $alas = $_GET ['alas'];
            $tinggi = $_GET ['tinggi'];
            $luas = ($alas * $tinggi) /2;

            // Tampilan Output
            print ("<pre>");
            print ("ALAS    = $alas <br>");
            print ("TINGGI  = $tinggi <br>");
            print ("LUAS    = (alas * tinggi) /2 <br>");
            print ("        = ($alas * $tinggi) /2 <br>");
            print ("        = $luas");
        ?>
        <hr width = 500 color = blue align = left>
        <a href = "input_segitiga.php">LAGI <<<</a>
    </font>
</body>
</html>