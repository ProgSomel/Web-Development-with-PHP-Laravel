<?php
$colors = array( 122, 233, 65 );
// $red = $colors[0];
// $green = $colors[1];
// $blue = $colors[2];
//?We Can do Above work Like This:
list( $red, $green, $blue ) = $colors;
echo $green . "\n";

list( $f, $l, $e, $m ) = array( 'fname', 'lname', 'Email', 'MobileNumber' );
echo $f;
