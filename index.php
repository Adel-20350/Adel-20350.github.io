<?php
require_once 'Mahasiswa.php';

$mahasiswa = new Mahasiswa();
$data = $mahasiswa->tampilData();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="mb-4">Data Mahasiswa Universitas Terbuka Hijau</h2>

    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah Data
    </a>

    <table class="table table-bordered table-striped">

        <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>NIM</th>
    <th>Alamat</th>
    <th>Aksi</th>
</tr>

<?php $no = 1; ?>
<?php while($row = $data->fetch_assoc()) { ?>

<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['nama'] ?></td>
    <td><?= $row['nim'] ?></td>
    <td><?= $row['alamat'] ?></td>

    <td>
        <a href="edit.php?id=<?= $row['id'] ?>"
        class="btn btn-warning btn-sm">
        Edit
        </a>

        <a href="hapus.php?id=<?= $row['id'] ?>"
        class="btn btn-danger btn-sm"
        onclick="return confirm('Yakin hapus data?')">
        Hapus
        </a>
    </td>
</tr>
        <?php } ?>

    </table>
</div>

</body>
</html>