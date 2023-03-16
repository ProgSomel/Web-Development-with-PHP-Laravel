<?php
function sum( $x, $y, int...$numbers ): int { //This will return integer or it will show Error
    echo $x . " " . "$y" . " ";
    $result = 0;
    for ( $i = 0; $i < count( $numbers ); $i++ ) {
        $result += $numbers[$i];
    }
    return $result;
}
echo sum( 5, 6, 7, 9, 11 );
