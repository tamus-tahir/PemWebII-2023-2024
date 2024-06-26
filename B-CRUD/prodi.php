<?php

// memanggil file koneksi ke database
require 'koneksi.php';

// membuat variabel koneksi menjdai global
global $koneksi;

// query mengambil tabel prodi
$result = mysqli_query($koneksi, "SELECT * FROM prodi");

// membuat variabel kosong yang nantinya akan di isi dengan data prodi dari database
$prodi = [];

// mysqli_fetch_assoc = mengambil 1 baris pada tabel prodi
// dengan while kita melalkukan pengulangan mysqli_fetch_assoc sehingga semua baris akan diambil
while ($data = mysqli_fetch_assoc($result)) {
    // mengisi data dari baris yang diambil pada variabel prodi
    $prodi[] = $data;
}

?>

<?php include 'header.php' ?>

<h1>Halaman Prodi</h1>

<a href="tambah.php">Tambah</a>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>No</th>
            <th>Prodi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php $i = 1 ?>
        <?php foreach ($prodi as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['prodi']; ?></td>
                <td>
                    <a href="ubah.php?id=<?= $row['id']; ?>">Ubah</a> ||
                    <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Anda Yakin? Data Akan Dihapus!')">Hapus</a>
                </td>
            </tr>
        <?php endforeach ?>

    </tbody>
</table>

<?php include 'footer.php' ?>