<?php

$x = 100;
$y = 200;

function penjumlahan()
{
    global $x, $y;
    return $x + $y;
}

echo penjumlahan();
