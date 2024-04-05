<?php

if (isset($_GET['submit'])) {
    $nilai = $_GET['nilai'];

    if ($nilai % 2 == 0) {
        $hasil = 'genap';
    } else {
        $hasil = 'ganjil';
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


    <h1>Kondisi</h1>

    <form action="" method="get">

        <input type="number" require name="nilai" placeholder="masukan nilai">

        <button type="submit" name="submit">hitung</button>
    </form>


    <p><?= isset($nilai) ? $nilai : ''; ?> Adalah bilangan <?= isset($hasil) ? $hasil : ''; ?></p>

</body>

</html>