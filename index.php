<?php

echo intToRoman(1994);

function intToRoman($num) {
    $romanVals = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    ];

    $romans = array_keys($romanVals);
    $values = array_values($romanVals);

    $result = '';

    for ($i = 0; $i < count($romans); $i++) {
        while ($num >= $values[$i]) {
            $num -= $values[$i];
            $result .= $romans[$i];
        }
    }

    return $result;
}
