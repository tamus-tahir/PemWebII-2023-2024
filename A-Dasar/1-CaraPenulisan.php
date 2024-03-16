<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- penulisan html di dalam php (not recomended) -->
    <?php echo "<h1>Unitama</h1>"; ?>

    <!-- penulisan php di dalam html (recomended) -->
    <h1><?php echo "Unitama"; ?></h1>

    <!-- php echo dapat disingkat menjadi -->
    <h1><?= "Unitama"; ?></h1>

</body>

</html>