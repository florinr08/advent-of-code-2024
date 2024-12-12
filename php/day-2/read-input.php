<?php

$input = file('input.txt', FILE_IGNORE_NEW_LINES);

array_walk($input, function (&$level) {
    $level = explode(' ', $level);
});

return $input;
