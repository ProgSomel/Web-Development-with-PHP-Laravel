<?php
$foods = [
    'Vegetables' => 'brinjal, brocoli, carrot, capsicum',
    'fruits'     => 'Orange, banana, apple',
    'drinks'     => 'water, milk',
];
// foreach ( $foods as $key => $value ) {
//     echo $key.": ", $value."\n";
// }

// $keys = array_keys($foods);
// for($i = 0; $i < count($keys); $i++) {
//     $key = $keys[$i];
//     echo $foods[$key]."\n";

// }

$foods['drinks'] = $foods['drinks'].", orange juice";
$foods['drinks'].= ", Mango juice";

$keys = array_keys($foods);
for($i = 0; $i < count($keys); $i++) {
    $key = $keys[$i];
    echo $foods[$key]."\n";

 }

