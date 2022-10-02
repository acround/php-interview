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
 * Callback for usort
 * @param string $key
 * @return int
 */
function sorter($key)
{
    return function ($first, $second) use ($key) {
        return strnatcmp($first[$key], $second[$key]);
    };
}

/**
 * Sorting an array by an arbitrary key
 * @param array $array The array which is needed to be sorted
 * @param string $key The key to sort
 * @return array
 */
function solution($array, $key)
{
    usort($array, sorter($key));
    return $array;
}
