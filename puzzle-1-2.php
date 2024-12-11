<?php

$test_input = '3   4
4   3
2   5
1   3
3   9
3   3
';

$input = file_get_contents('input-1-1.txt');

$left_list = $right_list = [];

foreach (explode("\n", $input) as $line) {
    if (! empty($line)) {
        preg_match('/(\d+) +(\d+)/', $line, $matches);
        $left_list[] = intval($matches[1]);
        $right_list[] = intval($matches[2]);
    }
}

$similarity_score = 0;
$right_list_counted_values = array_count_values($right_list);

foreach ($left_list as $item) {
    $similarity_score += $item * ($right_list_counted_values[$item] ?? 0);
}

// Calculate similarity score
echo 'Similarity score: ' . $similarity_score . PHP_EOL;
