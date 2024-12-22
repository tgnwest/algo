<?php

declare(strict_types=1);

$arr = [1,5,3,6,2,10];

function findSmallest(array $arr): int
{
    $smallest = $arr[0];
    $smallestIndex = 0;
    foreach ($arr as $key => $item) {
        if ($item < $smallest) {
            $smallest = $item;
            $smallestIndex = $key;
        }
    }

    return $smallestIndex;
}

function selectionSort(array $arr): array
{
    $result = [];
    foreach ($arr as $ignored) {
        $smallest = findSmallest($arr);
        $result[] = $arr[$smallest];
        unset($arr[$smallest]);
        $arr = array_values($arr);
    }

    return $result;
}

var_dump(selectionSort($arr));
