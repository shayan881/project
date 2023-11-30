<?php

function sum(int $x, int $y, $func)
{
    $sumer = $x + $y;
    $func($sumer);
}

sum(10, 22, function ($sumer) {
    echo "sum $sumer \n";
});
