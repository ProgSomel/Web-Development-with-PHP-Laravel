<?php
//! for loop

for ( $i = 0; $i < 10; $i++ ) {
    echo $i;
    echo PHP_EOL;
}
echo PHP_EOL;

//! while

$i = 0;
while ( $i < 10 ) {
    $i++;
    echo $i . PHP_EOL;
}
echo PHP_EOL;
$i = 0;
do {
    $i++;
    echo $i . " ";
} while ( $i < 5 );
