<?php

$input = file('input.txt', FILE_IGNORE_NEW_LINES);

$left_list = $right_list = [];

foreach ($input as $line) {
    preg_match('/(\d+) +(\d+)/', $line, $matches);
    $left_list[] = intval($matches[1]);
    $right_list[] = intval($matches[2]);
}

return [$left_list, $right_list];
