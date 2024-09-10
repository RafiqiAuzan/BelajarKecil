<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>***** CETAK BUKTI *****</title>
</head>
<body>
<center>
    <h1> RS. SEHAT SELALU</h1>
    <b><i>Jl. Merdeka no.2 Bekasi Tenggara <br></i></b>
    <hr color = red>
</center>
<pre>
    <?php
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
        $kdobat = $_GET['kdobat'];

        if($kdobat == "KP001") {
            $harga = 1500;
            $jenis = "Kapsul";
        }
        elseif ($kdobat == "TB002") {
            $harga = 18000;
            $jenis = "Tablet";
        }
        else {
            $harga = 20000;
            $jenis = "Sirup";
        }

        echo "***** TERIMA KASIH *****";
        echo "<P>";
        echo "Nama Pasien   : $nama <br>";
        echo "Alamat Pasien   : $alamat <br>";
        echo "Harga Obat    : Rp. $harga <br>";
        echo "Jenis Obat    : $jenis";
    ?>
</pre>
<hr color = red>
<a href = "contohifmajemuk.php">ISI DATA LAGI </a>
</body>
</html>