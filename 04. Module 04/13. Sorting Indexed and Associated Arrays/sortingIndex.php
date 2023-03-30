<?php
// $fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );
// $numbers = array(11, 2, 4, 3, 6 , 8 );
// sort($numbers);

// print_r($numbers);
// $fruits = array( 'apple', 'banana', 'f'=> 'orange', 'plum', 'dates', 'mango' );
// $numbers = array(11, 2, 4, 3, 6 , 8 );
// sort($fruits);

// print_r($fruits);

// $fruits = array( 'a'=>'apple','b'=> 'banana', 'f'=> 'orange', 'plum', 'dates', 'mango' );
// $numbers = array(11, 2, 4, 3, 6 , 8 );
// //? Key Soho Value Show korbe
// asort($fruits);

// print_r($fruits);

$fruits = array( 'a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'plum', 'dates', 'mango' );
$numbers = array( 11, 2, 4, 3, 6, 8 );
//? Key Soho Value Show korbe
asort( $numbers );

print_r( $numbers );

for ( $i = 0; $i < count( $numbers ); $i++ ) {
    echo $numbers[$i] . "\n";

}
echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;
foreach ( $numbers as $number ) {
    echo $number . "\n";
}

//! For Shorting In Decending Order Use 
//? rsort();
//! For Shorting with Key use
//? ksort();
//! For shorting in Reverse by Using key Use: 
//? krsort();

//! Sorting as String

sort($numbers, SORT_STRING);
foreach ($numbers as $number) {
    echo $number." ";
}