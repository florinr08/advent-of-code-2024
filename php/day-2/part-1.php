<?php

include('common.php');

$safe_reports = 0;

$safe_reports = count(array_filter($reports, 'reportIsSafe'));

// Calculate how many reports are safe
echo 'Safe reports: ' . $safe_reports . PHP_EOL;
