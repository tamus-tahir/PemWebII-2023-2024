<?php

// FUNCTION
// funtion => prosedur untuk melakukan tugas tertentu
// function bawaan dari php
// function yang dibuat oleh user 

// date ==> cetak tanggal
echo date('Y-m-d');

echo '<br>';

// isset ==> cek variabel ada atau tidak
$prodi = 'sistem';
var_dump(isset($prodi));

echo '<br>';


// empty ==> cek isi variabel ada atau tidak 
if (empty($prodi)) {
    echo 'kosong';
} else {
    echo 'ada';
}

echo '<br>';

// die ==> memberhentikan program
die();

echo 'teknik';
