<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<style>
table,th, td {
  border: 1px solid black;
  text-align: left;
}
th{
  font-size: 20px;
  background-color : red;
  padding : 10px
}
</style>
<?php 
$arrhp = array(  'hp1' => "Samsung Galaxy S22",
                 'hp2' => "Samsung Galaxy S22+", 
                 'hp3' => "Samsung Galaxy A03", 
                 'hp4' => "Samsung Galaxy XCover 5" );
?>
<table>
      <th>Daftar Smartphone Samsung</th>
      <?php foreach ($arrhp as $a) : ?>
      <tr>
      <td><?php echo $a; ?></td>
      </tr>
      <?php endforeach; ?>
</table>
</body>
</html>