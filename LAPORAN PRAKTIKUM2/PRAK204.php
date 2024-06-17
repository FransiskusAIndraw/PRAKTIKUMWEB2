<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<form action="" method="POST">
Nilai  : 
<input type="number" name="nilai" id="nilai" > <br>
<button type="submit" name="submit">Submit </button> 
</form>
<?php
    if (isset($_POST["submit"])) {
         $input = ($_POST["nilai"]);  
         if ($input == 0) {
            echo "<h1> hasil: nol";        }
        elseif ($input > 0 && $input < 10) {
            echo "<h1> hasil: satuan"; }
        elseif ($input >= 10 && $input < 20) {
            echo "<h1> hasil: belasan"; }
        elseif ($input >= 20 && $input < 100) {
            echo "<h1> hasil: puluhan"; }
        elseif ($input >= 100 && $input < 1000) {
            echo "<h1> hasil: ratusan"; }
        else {
            echo "<h1> anda menginput melebihi batas bilangan";}}?>
</body>
</html>
