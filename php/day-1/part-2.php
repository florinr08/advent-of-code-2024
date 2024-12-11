<?php

[$left_list, $right_list] = include('read-input.php');

$similarity_score = 0;
$right_list_counted_values = array_count_values($right_list);

foreach ($left_list as $item) {
    $similarity_score += $item * ($right_list_counted_values[$item] ?? 0);
}

// Calculate similarity score
echo 'Similarity score: ' . $similarity_score . PHP_EOL;
