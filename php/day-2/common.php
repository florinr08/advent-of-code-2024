<?php

$reports = include('read-input.php');

function reportIsSafe($report): bool {
    return (levelsAllIncreasing($report) || levelsAllDecreasing($report)) && acceptableDifferences($report);
}

function levelsAllIncreasing($report): bool {
    $last_level = null;

    foreach ($report as $level) {
        if ($last_level !== null && $level <= $last_level) {
            return false;
        }

        $last_level = $level;
    }

    return true;
}

function levelsAllDecreasing($report): bool {
    $last_level = null;

    foreach ($report as $level) {
        if ($last_level !== null && $level >= $last_level) {
            return false;
        }

        $last_level = $level;
    }

    return true;
}

function acceptableDifferences($report): bool {
    $last_level = null;

    foreach ($report as $level) {
        if ($last_level !== null && (($diff = abs($level - $last_level)) < 1 || $diff > 3)) {
            return false;
        }

        $last_level = $level;
    }

    return true;
}
