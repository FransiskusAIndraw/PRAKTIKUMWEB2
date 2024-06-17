<?php
require 'model.php';
$members = getMembers();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Member</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Data Member</h1>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Nomor</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
                </tr>
                </thead>
            <tbody>
            <?php foreach ($members as $member): ?>
        <tr>
            <td><?php echo $member['id_member']; ?></td>
            <td><?php echo $member['nama_member']; ?></td>
            <td><?php echo $member['nomor_member']; ?></td>
            <td><?php echo $member['alamat']; ?></td>
            <td><?php echo $member['tgl_mendaftar']; ?></td>
            <td><?php echo $member['tgl_terakhir_bayar']; ?></td>
            <td>
                <a href="FormMember.php?id=<?php echo $member['id_member']; ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="DeleteMember.php?id=<?php echo $member['id_member']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <a href="FormMember.php" class="btn btn-primary mb-4">Tambah Member</a>
    <a href="index.php" class="btn btn-primary mb-4">Kembali ke index</a>
</body>
</html>
