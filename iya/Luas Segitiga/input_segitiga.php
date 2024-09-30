<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung Luas Segitiga</title>
</head>
<body>
    <!-- Pembuatan Form -->
    <form action = "output_segitiga.php" method = "get">
        <font face = "courier new" size = 3>
            <h1>***** MENGHITUNG LUAS SEGITIGA *****</h1><p>
            <hr width = 500 color = blue align = left>

            <!-- Input -->
            <pre>
Masukan ALAS    = <input type = "text" name = "alas" size = 10 maxlength =10><br>
Masukan TINGGI  = <input type = "text" name = "tinggi" size = 10 maxlength =10><br>
            </pre>
            
            <hr width = 500 color = blue align = left>
        </font>
        <input type="submit" name="hitung" value ="HITUNG LUAS">
        &nbsp;&nbsp;&nbsp;&nbsp;
        <input type="reset" name="batal" value="BERSIH">
    </form>
</body>
</html>