<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="POST">
Nama 1: <input type="text" name="name1" id="name1"> <br>
Nama 2: <input type="text" name="name2" id="name2"><br>
Nama 3: <input type="text" name="name3" id="name3"><br>
<input type="submit" name="urutkan" value="Urutkan">
</form>
<?php
    function urutkan_nama($name1, $name2, $name3) {
        if ($name1 < $name2 and $name1 < $name3) {
            if ($name2 < $name3) {
                echo "$name1 <br> $name2 <br> $name3";
            } else {
                echo "$name1 <br> $name3 <br> $name2";}
        } elseif ($name2 < $name1 and $name2 < $name3) {
            if ($name1 < $name3) {
                echo "$name2 <br> $name1 <br> $name3";
            } else {
                echo "$name2 <br> $name3 <br> $name1";}
        } else {
            if ($name1 < $name2) {
                echo "$name3 <br> $name1 <br> $name2";
            } else {
                echo "$name3 <br> $name2 <br> $name1";}}}
    $name1 = $name2 = $name3 = "";
    echo "hasil: <br>"; 
    if (isset($_POST['urutkan'])) { 
        $name1 = ($_POST["name1"]);
        $name2 = ($_POST["name2"]);
        $name3 = ($_POST["name3"]);
        urutkan_nama($name1, $name2, $name3);}?>
</body>
</html>
