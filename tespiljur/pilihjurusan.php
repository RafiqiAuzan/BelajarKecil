<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <p>cari karakter</p>
    <form method="GET" action="" class="form-group">
        <input type="text" name="cari" placeholder="Pencarian...">
        <button type="Submit" name="OK">kirim</button>
    </form><br>
    <?php 


    $kalimat = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
    been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
    galley of type and scrambled it to make a type specimen book. It has survived not only five
    centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
    and more recently with desktop publishing software like Aldus PageMaker including versions of
    Lorem Ipsum";

    echo $kalimat;

        if (isset($_GET['OK']))
        {

            $input = $_GET['cari'];

            echo "<br><br>";
            echo "Character ". '"'. "$input". '" '. "appears ". preg_match_all("/[$input]/i",$kalimat,$matches). " times";
        }

        
    
    ?>
</body>
</html>
    