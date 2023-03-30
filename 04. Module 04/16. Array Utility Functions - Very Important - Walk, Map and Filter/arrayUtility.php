<?php
$numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18 );
function square( $n ) {
    printf( "Square of %d is %d\n", $n, $n * $n );
}
function cube($n) {
    return $n*$n*$n;
}
function even($n) {
    return $n%2 == 0;
}
/*?
 For print or echo we need array_walk
 For Return We need array_map
*/
// array_walk( $numbers, 'square' );
// print_r (array_map(  'cube', $numbers ));

//! For finding Specific Value not All Values
print_r(array_filter($numbers, 'even', true));

$person = array('sujon', 'kabir', 'sadab', 'selim');

function findNameStartWithS($name) {
     return $name[0] == 's';
}
print_r(array_filter($person, 'findNameStartWithS'));


