<?php
require 'a.php';
require 's.php';

$tS = testar('S', 5000);
$tA = testar('A', 5000);
$diff = $tS - $tA;
$perc = round($tS / $tA, 2);
echo "diff: $diff";
echo PHP_EOL;
echo "A é $perc vezes mais rapido.";
echo PHP_EOL;

function testar($c, $t=1000) {
    $ini = microtime(true);
//    $ini = round($ini, 8);
    echo "$c ini: $ini";
    echo PHP_EOL;

    for ($i=0; $i < $t; $i++) {
        $v = rand(0, 2000);
        $c::label($v);
    }

    $fim = microtime(true);
//    $fim = round($fim, 8);
    $t = $fim - $ini;
    echo "$c   t: $t";
    echo PHP_EOL;
    return $t;
}

