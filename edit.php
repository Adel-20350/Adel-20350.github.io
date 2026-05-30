<?php
require_once 'Mahasiswa.php';

$mahasiswa = new Mahasiswa();

$id = $_GET['id'];
$data = $mahasiswa->ambilData($id);
$row = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2>Edit Data Mahasiswa</h2>

    <form action="update.php" method="POST">

        <input type="hidden" name="id" value="<?= $row['id'] ?>">

        <div class="mb-3">
            <label>Nama</label>
            <input type="text"
            name="nama"
            class="form-control"
            value="<?= $row['nama'] ?>">
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text"
            name="nim"
            class="form-control"
            value="<?= $row['nim'] ?>">
        </div>

        <div class="mb-3">
            <label>Alamat</label>
            <textarea name="alamat"
            class="form-control"><?= $row['alamat'] ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>
        </form>
</div>

</body>
</html>