<?php

function plus($a, $b) {
    return $a + $b;
}

function minus($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $a / $b;
}

function master($a, $b, $sign) {
    if ($sign == "+") {
        return plus($a, $b);
    } elseif ($sign == "-") {
        return minus($a, $b);
    } elseif ($sign == "x") {
        return multiply($a, $b);
    } elseif ($sign == ":") {
        return divide($a, $b);
    } else {
        return 'Incorrect sign';
    }
}

$one =  $_GET["one"];
$two = $_GET["two"];
$sign = $_GET["sign"];

echo master($one, $two, $sign);

?>