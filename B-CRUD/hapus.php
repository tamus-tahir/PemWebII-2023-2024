<?php

// memanggil file koneksi ke database
require 'koneksi.php';

// membuat variabel koneksi menjdai global
global $koneksi;

// menampung data id pada variabel id
$id = $_GET['id'];

// query menghapus data berdasarkan id
mysqli_query($koneksi, "DELETE FROM prodi WHERE id = $id");
mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_prodi = $id");

if (mysqli_affected_rows($koneksi) > 0) {
    echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location.href = 'prodi.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data Gagal Dihapus');
            </script>
        ";
}
