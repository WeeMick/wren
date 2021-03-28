<?php

$array = file('../stock.csv');

foreach ($array as $key => $var) {
    $array[$key] = explode(',', $var);
}

foreach ($array as $key => $value) {
    $i++;
    echo $array[$key][0];
    echo $array[$key][1];
    echo $array[$key][2];
    echo $array[$key][3];
    echo $array[$key][4];
    echo $array[$key][5];
}