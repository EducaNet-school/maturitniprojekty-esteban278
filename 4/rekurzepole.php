<?php
$arr = [32, 2, 13, 41, [14, [86, 12]], 21];

function printArray($arr) {
    foreach ($arr as $value) {
        if (is_array($value))
        {
            printArray($value);
        }
        else
        {
            echo $value . " ";
        }
    }
}

printArray($arr);