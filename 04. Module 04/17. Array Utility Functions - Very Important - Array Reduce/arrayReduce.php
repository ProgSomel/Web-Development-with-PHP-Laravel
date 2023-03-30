<?php
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8);
function sum($oldValue, $newValue) {
    if($newValue % 2 == 0) {
        return $oldValue + $newValue;
    }
    return $oldValue;
}
$sum = array_reduce($numbers, 'sum');
echo $sum;

/*
$newValue = array er nElements
$oldValue = 0 theke Start
sum(0,1)//?1
sum(1,2)//?3
sum(3,3)//?6
sum(6, 4)//?10
sum(10, 5)//?15
...........
*/