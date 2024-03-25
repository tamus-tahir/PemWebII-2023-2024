<?php
$data = [
    [
        'nama' => 'andi',
        'tahun' => 2020,
        'prodi' => 'informatika',
    ],
    [
        'nama' => 'iwan',
        'tahun' => 2021,
        'prodi' => 'bisnis',
    ],
    [
        'nama' => 'budi',
        'tahun' => 2021,
        'prodi' => 'teknik',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Angkatan</th>
            <th>Prodi</th>
        </tr>

        <?php $i = 1 ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['tahun']; ?></td>
                <td><?= $row['prodi']; ?></td>
            </tr>
        <?php endforeach ?>

    </table>

</body>

</html>