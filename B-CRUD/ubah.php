<?php

// memanggil file koneksi ke database
require 'koneksi.php';

// membuat variabel koneksi menjdai global
global $koneksi;

// menampung data id pada variabel id
$id = $_GET['id'];

// query mengambil data berdasarkan id
$prodi = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM prodi WHERE id = '$id'"));

if (isset($_POST['submit'])) {
    global $koneksi;
    $prodi = $_POST['prodi'];
    $id = $_POST['id'];

    // query mengubah data berdasarkan id
    $query = "UPDATE prodi SET prodi = '$prodi' WHERE id = $id";
    mysqli_query($koneksi,  $query);
    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href = 'prodi.php';
                </script>
            ";
    } else {
        echo "
                <script>
                    alert('Data Gagal Diubah');
                </script>
            ";
    }
}

?>

<?php include 'header.php' ?>

<h1>Halaman Ubah Prodi</h1>

<form action="" method="post">

    <input type="text" name="prodi" required placeholder="input prodi" value="<?= $prodi['prodi']; ?>">

    <input type="hidden" name="id" value="<?= $prodi['id']; ?>">

    <button type="submit" name="submit">Submit</button>

</form>

<?php include 'footer.php' ?>