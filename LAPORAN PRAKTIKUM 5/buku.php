<?php
require 'Model.php';
$books = getBook();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Buku</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Data Buku</h1>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($books as $book): ?>
                <tr>
                    <td><?php echo $book['id_buku']; ?></td>
                    <td><?php echo $book['judul_buku']; ?></td>
                    <td><?php echo $book['penulis']; ?></td>
                    <td><?php echo $book['penerbit']; ?></td>
                    <td><?php echo $book['tahun_penerbit']; ?></td>
                    <td>
                        <a href="FormBuku.php?id=<?php echo $book['id_buku']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="DeleteBuku.php?id=<?php echo $book['id_buku']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this book?');">Hapus</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="formBuku.php" class="btn btn-primary mb-4">Tambah Buku</a> 
        <a href="index.php" class="btn btn-primary mb-4">Kembali ke index</a>
    </div>
  </body>
</html>
