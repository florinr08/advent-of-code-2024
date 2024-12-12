<?php

$input = include('read-input.php');

preg_match_all('/(mul\(\d+,\d+\)|do\(\)|don\'t\(\))/', $input, $matches);

$enabled = true;
$result = 0;

foreach ($matches[1] as $instruction) {
    if ($instruction === 'do()') {
        $enabled = true;
    } elseif ($instruction === 'don\'t()') {
        $enabled = false;
    } elseif ($enabled) {
        preg_match('/mul\((\d+),(\d+)\)/', $instruction, $instruction_match);
        $result += $instruction_match[1] * $instruction_match[2];
    }
}

// Result after adding up results
echo 'Result: ' . $result . PHP_EOL;
