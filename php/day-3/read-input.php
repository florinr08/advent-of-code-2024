<?php

$input = file('input.txt', FILE_IGNORE_NEW_LINES);

$input = implode('', $input);

return $input;
