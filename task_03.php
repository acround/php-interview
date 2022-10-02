<?php

$array = [
    ['id' => 1, 'date' => "12.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "02.05.2020", 'name' => "test2"],
    ['id' => 4, 'date' => "08.03.2020", 'name' => "test4"],
    ['id' => 1, 'date' => "22.01.2020", 'name' => "test1"],
    ['id' => 2, 'date' => "11.11.2020", 'name' => "test4"],
    ['id' => 3, 'date' => "06.06.2020", 'name' => "test3"],
];

/**
 * 
 * @param array $item Item of source array
 * @param array $condition Condition like ['id', '=', 1]
 * @return boolean
 */
function fits($item, $condition)
{
    return (
            ($condition[1] == '<') && ($item[$condition[0]] < $condition[2]) ||
            ($condition[1] == '=') && ($item[$condition[0]] == $condition[2]) ||
            ($condition[1] == '>') && ($item[$condition[0]] > $condition[2])
            );
}

/**
 * 
 * @param array $array Source array
 * @param array $condition Condition like ['id', '=', 1]
 * @return array Filtered array
 */
function solution($array, $condition)
{
    $out = []; // Output
    $item = reset($array);
    while ($item !== false) {
        if (fits($item, $condition)) {
            $out[] = $item;
        }
        $item = next($array);
    }

    return $out;
}
