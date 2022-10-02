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
 * Returns the first occurrences for each id
 * @param array $array
 * @return array
 */
function solution1($array)
{
    $out = []; // Output
    $ids = [];
    $item = reset($array);
    while ($item !== false) {
        if (!isset($ids[$array['id']])) {
            $ids[$array['id']] = $array['id'];
            $out[$array['id']] = $item;
        }
        $item = next($array);
    }

    return $out;
}

/**
 * Returns the last occurrences for each id
 * @param array $array
 * @return array
 */
function solution2($array)
{
    $out = []; // Output
    $item = reset($array);
    while ($item !== false) {
        $out[$array['id']] = $item;
        $item = next($array);
    }

    return $out;
}
