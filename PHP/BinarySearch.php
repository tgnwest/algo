<?php

function binarySearch(array $list, $search): ?int
{
	$low = 0;
	$high = count($list) - 1; // list boundaries

	while ($low <= $high) {
		$mid = ($low + $high) / 2;
		$guess = $list[$mid];
		if ($guess == $search) {
			return $mid;
		}
		if ($guess > $search) {
			$high = $mid - 1;
		} else {
			$low = $mid + 1;
		}
	}

	return null;
}

$list = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19];
$a = binarySearch($list, 5); // 4
$b = binarySearch($list, 55); // null

var_dump($a, $b);