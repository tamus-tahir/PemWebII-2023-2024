<!-- 
    jika menggunakan include, file setelahnya akan tetap dijalankan meskipun file yang di include tidak ditemukan atau error
    include ==> memasukan file ke dalam dokumen
    include_once ==> mencegah menjalankan file yang sama ketika di inlcude
-->

<?php include_once 'header.php' ?>

<?php include_once 'header.php' ?>

<h1>Beranda</h1>

<?php include 'footer.php' ?>