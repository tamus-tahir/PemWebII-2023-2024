<?php

require 'koneksi.php';
global $koneksi;

$id = $_GET['id'];
$mahasiswa = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id = $id"));

// explode => mengubah string menjadi array
$hobi = explode(", ", $mahasiswa['hobi']);

$result = mysqli_query($koneksi, "SELECT * FROM prodi ORDER BY id DESC");

$prodi = [];
while ($data = mysqli_fetch_assoc($result)) {
    $prodi[] = $data;
}

if (isset($_POST['submit'])) {
    $hobi = $_POST['hobi'];
    $hobi = implode(", ", $hobi);
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $id_prodi = $_POST['id_prodi'];
    $gender = $_POST['gender'];
    $deskripsi = $_POST['deskripsi'];
    $id = $_POST['id'];

    // sesuai urutan di database (id, id_prodi, nama, nim, gender, deskripsi)
    $query = "UPDATE mahasiswa SET 
        hobi = '$hobi',
        nama = '$nama',
        nim = '$nim',
        id_prodi = '$id_prodi',
        gender = '$gender',
        deskripsi = '$deskripsi'
        WHERE id = $id
    ";

    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
                <script>
                    alert('Data Berhasil Diubah');
                    window.location.href = 'mahasiswa.php';
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

<h1>Halaman Ubah Mahasiswa</h1>

<form action="" method="post">

    <input type="text" name="nama" placeholder="masukan nama" required value="<?= $mahasiswa['nama']; ?>"> <br> <br>

    <input type="number" name="nim" placeholder="masukan nim" required value="<?= $mahasiswa['nim']; ?>"> <br> <br>

    <select name="id_prodi" id="">
        <?php foreach ($prodi as $row) : ?>
            <option value="<?= $row['id']; ?>" <?= $row['id'] == $mahasiswa['id_prodi'] ? 'selected' : ''; ?>><?= $row['prodi']; ?></option>
        <?php endforeach ?>
    </select>

    <p>Pilih Jenis Kelamin</p>
    <input type="radio" name="gender" value="1" <?= $mahasiswa['gender'] == 1 ? 'checked' : ''; ?>>
    <label for="">Laki-Laki</label>
    <input type="radio" name="gender" value="0" <?= $mahasiswa['gender'] == 0 ? 'checked' : ''; ?>>
    <label for="">Perempuan</label>

    <br><br>

    <p>Pilih Hobi</p>
    <!-- in_array => mencari sting pada array -->
    <input type="checkbox" name="hobi[]" value="Game" <?= in_array('Game', $hobi) ? 'checked' : ''; ?>> Game
    <input type="checkbox" name="hobi[]" value="Nonton" <?= in_array('Nonton', $hobi) ? 'checked' : ''; ?>> Nonton
    <input type="checkbox" name="hobi[]" value="Musik" <?= in_array('Musik', $hobi) ? 'checked' : ''; ?>> Musik
    <input type="checkbox" name="hobi[]" value="Olahraga" <?= in_array('Olahraga', $hobi) ? 'checked' : ''; ?>> Olahraga

    <br><br>

    <textarea name="deskripsi" id="" cols="30" rows="2" placeholder="masukan deskripsi"><?= $mahasiswa['deskripsi']; ?></textarea>

    <br><br>

    <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">

    <button name="submit" type="submit">Submit</button>

</form>

<?php include 'footer.php' ?>