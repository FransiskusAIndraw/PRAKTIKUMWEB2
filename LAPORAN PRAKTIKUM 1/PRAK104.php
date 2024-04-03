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
</style>
<?php 
$hparr = ["Samsung Galaxy S22", "Samsung Galaxy S22+", "Samsung Galaxy A03", "Samsung Galaxy XCover 5"];
?>
<table>
      <th>Daftar Smartphone Samsung</th>
      <?php foreach ($hparr as $h) : ?>
      <tr>
      <td><?php echo $h; ?></td>
      </tr>
      <?php endforeach; ?>
</table>
</body>
</html>