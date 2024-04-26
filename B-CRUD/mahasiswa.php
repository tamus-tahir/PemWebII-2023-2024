<?php

require 'koneksi.php';
global $koneksi;

/*
    prodi.id => tabel prodi filed id
    mahasiswa.id_prodi => tabel mahasiswa filed id_prodi
*/
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa JOIN prodi ON prodi.id = mahasiswa.id_prodi ORDER BY mahasiswa.id DESC");

$mahasiswa = [];
while ($data = mysqli_fetch_assoc($result)) {
    $mahasiswa[] = $data;
}

?>

<?php include 'header.php' ?>

<h1>Halaman Mahasiswa</h1>

<a href="tambah_mahasiswa.php">Tambah</a>

<table border="1" cellpadding="10" cellspacing="0">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Prodi</th>
            <th>Jenis Kelamin</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1 ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['nim']; ?></td>
                <td><?= $row['prodi']; ?></td>
                <td><?= $row['gender'] == 1 ? 'Laki-Laki' : 'Perempuan'; ?></td>
                <td><?= $row['deskripsi']; ?></td>
                <td>
                    <a href="ubah_mahasiswa.php?id=<?= $row['id']; ?>">Ubah</a> ||
                    <a href="hapus_mahasiswa.php?id=<?= $row['id']; ?>" onclick="return confirm('Anda Yakin? Data Akan Dihapus!')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>

    </tbody>

</table>

<?php include 'footer.php' ?>