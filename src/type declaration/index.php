<?php

declare(strict_types=1); // must be 1st statement in php script

// type declaration for parameters
function addNumbersStrict(int $num1, int $num2, int $num3) {
	return $num1 + $num2 + $num3;
}

echo addNumbersStrict(9, 6, 1);

// type declaration for return type
function addTwoNums($a, $b): int {
	return $a + $b;
}

echo '<BR>' . addTwoNums(3, 1);

