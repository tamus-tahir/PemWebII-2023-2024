<?php
// variabel di luar function tidak bisa digunakan di dalam function
$x = 100;
$y = 200;

function penjumlahan()
{
    // untuk dapat digunakan variabel tersebut dijadikan global variabel
    global $x, $y;
    return $x + $y;
}

echo penjumlahan();
