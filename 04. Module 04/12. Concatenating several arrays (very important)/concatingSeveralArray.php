<?php
$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

$random = array(
    'a' => 12, 'b' => 45, 'c' => 34, 'd' => 22, 'e' => 77, 'f' => 33, 12 => 83, 'g' => 91,
);

// $newFruits1 = array_slice($fruits, 0, 3);
// $newFruits2 = array_slice($fruits, 3);

// $newFruits = array_merge($newFruits1, $newFruits2);

// print_r($newFruits1);
// print_r($newFruits2);
// print_r($newFruits);

// $newFruits2 = array_slice($fruits, 3,null, true);

// $newFruitsPlus = $newFruits1 + $newFruits2;
// print_r($newFruitsPlus);

$randomData = array_splice( $random, 2, 2, array( "j" => 45, "k" => 12 ) );

print_r( $randomData );
print_r( $random );
