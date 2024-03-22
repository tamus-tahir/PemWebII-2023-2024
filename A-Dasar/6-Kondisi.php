<?php

$i = 10;
if ($i < 20) {
    echo 'Sistem';
} else if ($i > 20) {
    echo 'Bisnis';
} else {
    echo 'Teknik';
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

    <?php if ($i < 20) : ?>
        <p>Sistem</p>
    <?php elseif ($i > 20) : ?>
        <p>Bisnis</p>
    <?php else : ?>
        <p>Teknik</p>
    <?php endif ?>

</body>

</html>