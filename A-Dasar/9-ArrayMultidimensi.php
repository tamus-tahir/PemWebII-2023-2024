<?php

$data = [
    ['andi', '2020', 'informatika'],
    ['iwan', '2021', 'bisnis'],
    ['budi', '2021', 'teknik'],
];

// var_dump($data);
// echo $data[2][2];

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
        <?php foreach ($data as $d) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $d[0]; ?></td>
                <td><?= $d[1]; ?></td>
                <td><?= $d[2]; ?></td>
            </tr>
        <?php endforeach ?>

    </table>

</body>

</html>