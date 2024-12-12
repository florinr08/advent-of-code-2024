<?php

$input = include('read-input.php');

preg_match_all('/(mul\((\d+,\d+)\))/', $input, $matches);

$multiplications = $matches[2];

array_walk($multiplications, function (&$value) {
    $value = array_product(explode(',', $value));
});

$multiplications = array_sum($multiplications);

// Result after adding up multiplications
echo 'Result: ' . $multiplications . PHP_EOL;
