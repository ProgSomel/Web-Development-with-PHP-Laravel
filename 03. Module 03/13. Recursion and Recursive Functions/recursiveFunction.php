<?php
//! Recursion
// //?The Below Function will work in Infifnity loop
// function printN( $i ) {
//     echo $i . "\n";

//     $i++;

//     printN( $i );
// }

// printN( 1 );

function printN( $i ) {

    if ( $i >= 10 ) {
        return;
    }
    echo $i . "\n";
    $i++;
    printN( $i );
}
printN( 1 );

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

function printNumber( $counter, $end, $stepping = 1 ) {
    if ( $counter > $end ) {
        return;
    }
    echo $counter . "\n";
    $counter += $stepping;
    printNumber( $counter, $end, $stepping );

}
printNumber( 21, 37, 5 );
