<?php

// aritmatika

echo 2 + 2;
echo 2 / 2;
echo 2 * 2;
echo 2 - 2;

// penggabungan string;
echo 'Kampus' . ' ' . 'Unitama';

// perbandingan
var_dump(2 == 2);
// tidak membandingankan tipe data
var_dump(2 == '2');
// membandingankan tipe data
var_dump(2 === '2');

// pembalik
var_dump(2 != 2);
// tidak membandingankan tipe data
var_dump(2 != '2');
// membandingankan tipe data
var_dump(2 !== '2');

// logic
// jika kedua kondisi true output true
var_dump((10 > 2) && (2 < 5));

// jika salah satu kondisi true output true
var_dump((10 > 2) || (2 > 5));

// pembalik
var_dump(!(2 > 5));
