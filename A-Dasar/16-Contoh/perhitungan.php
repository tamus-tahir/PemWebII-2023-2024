<?php

if (isset($_POST['submit'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    $hasil = $panjang * $lebar;
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

    <h1>Perhitungan</h1>

    <form action="" method="post">

        <input type="number" name="panjang" placeholder="Masukan nilai panjang" require value="<?= isset($panjang) ? $panjang : 0; ?>">

        <input type="number" name="lebar" placeholder="Masukan nilai lebar" require value="<?= isset($lebar) ? $lebar : 0; ?>">

        <button type="submit" name="submit">Hitung</button>

    </form>

    <p>Luar persegi panjang adalah : <?= isset($hasil) ? $hasil : 0; ?></p>

</body>

</html>