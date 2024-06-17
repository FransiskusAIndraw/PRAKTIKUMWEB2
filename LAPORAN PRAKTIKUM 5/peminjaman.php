<?php
require 'model.php';
$loans = getPeminjaman();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Peminjaman</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h1 class="mt-5 mb-4">Data Peminjaman</h1>
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal Kembali</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($loans as $loan): ?>
        <tr>
            <td><?php echo $loan['id_peminjaman']; ?></td>
            <td><?php echo $loan['tgl_pinjam']; ?></td>
            <td><?php echo $loan['tgl_kembali']; ?></td>
            <td>
                <a href="FormPeminjaman.php?id=<?php echo $loan['id_peminjaman']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="DeletePeminjaman.php?id=<?php echo $loan['id_peminjaman']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="FormPeminjaman.php" class="btn btn-primary mb-4">Tambah Peminjaman</a>
    <a href="index.php" class="btn btn-primary mb-4">Kembali ke Index</a>
    </div>
</body>
</html>
