<?php

include('common.php');

$safe_reports = 0;

$safe_reports = count(array_filter($reports, function ($report) {
    if (reportIsSafe($report)) {
        return true;
    } else {
        for ($key_to_remove = 0; $key_to_remove < count($report); $key_to_remove++) {
            if (reportIsSafe(array_merge(
                array_slice($report, 0, $key_to_remove),
                array_slice($report, $key_to_remove + 1),
            ))) {
                return true;
            }
        }
    }

    return false;
}));

// Calculate how many reports are safe
echo 'Safe reports: ' . $safe_reports . PHP_EOL;
