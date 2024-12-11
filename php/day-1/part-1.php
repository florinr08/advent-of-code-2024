<?php

[$left_list, $right_list] = include('read-input.php');

sort($left_list);
sort($right_list);

array_walk($left_list, function (&$item, $key) use ($right_list) {
    // Calculate distance apart
    $item = abs($item - $right_list[$key]);
});

// Calculate total distance
echo 'Total distance: ' . array_sum($left_list) . PHP_EOL;
