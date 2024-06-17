<!DOCTYPE html>
<html>
<head>
    <title>List Buku</title>
</head>
<body>
<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>Daftar Buku<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="mb-4">Daftar Buku</h2>
    <a href="/buku/create" class="btn btn-success mb-3">Tambah Buku</a>
    <table class="table table-striped table-bordered">
        <thead>
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
            <?php foreach($buku as $item): ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['judul'] ?></td>
                    <td><?= $item['penulis'] ?></td>
                    <td><?= $item['penerbit'] ?></td>
                    <td><?= $item['tahun_terbit'] ?></td>
                    <td>
                        <a href="/buku/edit/<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/buku/delete/<?= $item['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
</body>
</html>
