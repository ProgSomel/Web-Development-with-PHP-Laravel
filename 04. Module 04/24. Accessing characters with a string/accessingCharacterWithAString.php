<?php
$string = "Hello World";
// echo $string[0];
// echo PHP_EOL;
// echo $string[-1];

echo substr( $string, 0, 4 );
echo PHP_EOL;
//? Getting last 3 Characters
$length = strlen( $string );
echo substr( $string, $length - 3 );
echo PHP_EOL;
echo substr( $string, -3 );
