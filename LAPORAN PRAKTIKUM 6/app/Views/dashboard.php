<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
<?= $this->extend('layouts/main') ?>
<?= $this->section('title') ?>Dashboard<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <h2 class="mb-4">Welcome to Library</h2>
    <a href="/buku" class="btn btn-primary mb-3">Manage Buku</a>
    <a href="/logout" class="btn btn-secondary mb-3">Logout</a>
</div>
<?= $this->endSection() ?>
</body>
</html>
