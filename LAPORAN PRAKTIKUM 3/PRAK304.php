<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST["nilai"];}
    if (isset($_POST["kurang"])) {
        $nilai -= 1;}
    if (isset($_POST["tambah"])) {
        $nilai += 1;}
    if (empty($nilai)) : ?>
        <form action="" method="POST">
            Jumlah bintang : <input type="text" name="nilai">
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php
    endif;
    if (!empty($nilai)) :
        echo "Jumlah bintang $nilai <br>";
        $a = 1;
        while ($a <= $nilai) {
            echo " <img src='pics/star-images-9441.png' width='50' height='50'/> ";
            $a++;}?>
        <form action="" method="POST">
            <button type="submit" name="tambah">Tambah</button>
            <button type="submit" name="kurang">Kurang</button>
            <input type="text" name="nilai" value="<?= $nilai ?>" hidden>
        <?php
    endif;?>
</body>
</html>
