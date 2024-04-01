<?php

if (isset($_GET['submit'])) {
    echo $_GET['nama'];
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

    <form action="" method="get">
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>

    <hr>

    <form action="proses.php" method="get">
        <input type="text" name="prodi">
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>