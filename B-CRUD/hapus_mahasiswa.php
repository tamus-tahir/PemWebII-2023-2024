<?php

require 'koneksi.php';
global $koneksi;

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id = $id");

if (mysqli_affected_rows($koneksi) > 0) {
    echo "
            <script>
                alert('Data Berhasil Dihapus');
                window.location.href = 'mahasiswa.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert('Data Gagal Dihapus');
            </script>
        ";
}
