<?php
// jika ada variabel submit
// variabel submit ada jika tombol submit ditekan
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

    <!-- 
		get digunakan untuk mengolah data
		data yang dikirim akan tampil di url
		biasa digunakan untuk pagnation atau membuat artikel
		jika actionnya kosong maka data akan dikirim ke halaman ini
		jika tidak menulis action dan method maka 
			action default adalah kosong dan
			method default adalah get
	-->
    <form action="" method="get">
        <input type="text" name="nama">
        <button type="submit" name="submit">Kirim</button>
    </form>

    <hr>

    <!-- 
		disini kita mengisi nilai action proses.php
		hasil dari input ini akan diolah pada file proses.php
	-->
    <form action="proses.php" method="get">
        <input type="text" name="prodi">
        <button type="submit" name="submit">Kirim</button>
    </form>

</body>

</html>