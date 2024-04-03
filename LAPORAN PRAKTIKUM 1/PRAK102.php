<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php 
$phi = 3.14;
$jarijari = 4.2;
$tinggi = 5.4;
$kerucut = 0.333 * $phi * $jarijari * $jarijari * $tinggi;
$formkerucut = number_format($kerucut, 3, '.', ',');
echo "$formkerucut m3 ";
?>
</body>
</html>
