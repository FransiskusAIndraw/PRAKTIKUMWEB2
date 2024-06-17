<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="" method="POST">
        Batas Bawah : <input type="text" name="batas_bawah"><br>
        Batas Atas : <input type="text" name="batas_atas"><br>
        <button type="submit" name="submit">Cetak</button>
    </form>
<?php
if (isset($_POST["submit"])) {
    $bawah = $_POST["batas_bawah"];
    $atas = $_POST["batas_atas"];
    do {
        if (($bawah + 7) % 5 == 0) {
            echo " <img src='pics/star-images-9441.png' width='20' height='20'/> ";
        } else {
            echo " $bawah ";}
        $bawah++;
    } while ($bawah <= $atas);}?>
</body>
</html>
