<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh If Majemuk</title>
</head>
<body>
<form action ="bukti01.php" method ="get">
    <center>
        <h1> RS. SEHAT SELALU</h1>
        <b><i>Jl. Merdeka no.2 Bekasi Tenggara <br></i></b>
        <hr color = red>
    </center>
    <pre>
Nama pasien : <input type="text" name="nama" size=25 maxlength =30><br>
Alamat Pasien   : <textarea name="alamat"  rows=3 cols=30 wrap="off"></textarea><br>
Kode Obat   : <Select size=1 name="kdobat">
    <option> KP001
    <option> TB002
    <option> SR003
</select><br>
    </pre>
    <hr color=red>
    <input type="submit" name="lanjut" value="CETAK">
    &nbsp;&nbsp;&nbsp;
    <input type="reset" name="reset" value="BATAL">
    <hr color=red>
</form>
</body>
</html>