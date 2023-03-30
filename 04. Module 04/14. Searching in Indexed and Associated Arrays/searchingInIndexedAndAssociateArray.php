<?php
$fruits = array( 'a' => 'apple', 'b' => 'banana', 'f' => 'orange', 'plum', 'dates', 'mango' );
$numbers = array( 11, 2, 4, "56", 3, 6, 8 );

if ( in_array( '56', $numbers, true ) ) {
    //?true use korle type soho show korbe
    echo "56 is Found\n";
} else {
    echo "56 is Not Found\n";
}

//! For FInding position
$offSet = array_search( 56, $numbers, true );
echo $offSet;
