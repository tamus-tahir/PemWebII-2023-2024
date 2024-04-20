<?php

// memanggil file koneksi ke database
require 'koneksi.php';

if (isset($_POST['submit'])) {

    // membuat variabel koneksi menjdai global
    global $koneksi;

    // menampung data prodi pada variabel prodi
    $prodi = $_POST['prodi'];

    // query menambahkan data ke database
    $query = "INSERT INTO prodi VALUES ('', '$prodi')";

    // menjalankan query
    mysqli_query($koneksi, $query);

    // mysqli_affected_rows akan mengambalikan nilai 1 jika terjadi perubahan data pada database, baik menambah, mengubah atau menghapus
    // alert = notifikasi pada javascript
    // window.location.href = berpindah pada sebuah halaman dengan javascript
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location.href = 'prodi.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                </script>
            ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Halaman Tambah Prodi</h1>

    <form action="" method="post">

        <input type="text" name="prodi" required placeholder="input prodi">

        <button type="submit" name="submit">Submit</button>

    </form>



</body>

</html>