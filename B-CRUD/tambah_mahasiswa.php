<?php

require 'koneksi.php';
global $koneksi;

$result = mysqli_query($koneksi, "SELECT * FROM prodi ORDER BY id DESC");

$prodi = [];
while ($data = mysqli_fetch_assoc($result)) {
    $prodi[] = $data;
}

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $id_prodi = $_POST['id_prodi'];
    $gender = $_POST['gender'];
    $deskripsi = $_POST['deskripsi'];

    // sesuai urutan di database (id, id_prodi, nama, nim, gender, deskripsi)
    $query = "INSERT INTO mahasiswa VALUES ('', '$id_prodi', '$nama' , '$nim', '$gender', '$deskripsi')";

    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    window.location.href = 'mahasiswa.php';
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


<?php include 'header.php' ?>

<h1>Halaman Tambah Mahasiswa</h1>

<form action="" method="post">

    <input type="text" name="nama" placeholder="masukan nama" required> <br> <br>
    <input type="number" name="nim" placeholder="masukan nim" required> <br> <br>

    <select name="id_prodi" id="">
        <?php foreach ($prodi as $row) : ?>
            <option value="<?= $row['id']; ?>"><?= $row['prodi']; ?></option>
        <?php endforeach ?>
    </select>

    <p>Pilih Jenis Kelamin</p>
    <input type="radio" name="gender" value="1">
    <label for="">Laki-Laki</label>
    <input type="radio" name="gender" value="0">
    <label for="">Perempuan</label>

    <br><br>

    <textarea name="deskripsi" id="" cols="30" rows="2" placeholder="masukan deskripsi"></textarea>

    <br><br>

    <button name="submit" type="submit">Submit</button>

</form>

<?php include 'footer.php' ?>