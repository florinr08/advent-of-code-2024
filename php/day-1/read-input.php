<?php

$test_input = '3   4
4   3
2   5
1   3
3   9
3   3
';

$input = file_get_contents('input.txt');

$left_list = $right_list = [];

foreach (explode("\n", $input) as $line) {
    if (! empty($line)) {
        preg_match('/(\d+) +(\d+)/', $line, $matches);
        $left_list[] = intval($matches[1]);
        $right_list[] = intval($matches[2]);
    }
}

return [$left_list, $right_list];
