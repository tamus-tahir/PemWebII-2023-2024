<?php

// ARRAY
// $prodi = array('sistem', 2024, true);

$prodi = ['sistem', 'teknik', 'bisnis', 'teknologi'];

// var_dump($prodi);

// echo $prodi[2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php for ($i = 0; $i < count($prodi); $i++) : ?>
        <h1><?= $prodi[$i]; ?></h1>
    <?php endfor ?>

    <br>

    <?php foreach ($prodi as $p) : ?>
        <h1><?= $p; ?></h1>
    <?php endforeach ?>

</body>

</html>