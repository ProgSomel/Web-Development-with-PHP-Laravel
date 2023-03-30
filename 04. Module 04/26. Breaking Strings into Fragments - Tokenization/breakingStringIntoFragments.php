<?php
$string = "Hello World, How are you?";
$parts = explode( ",", $string );
print_r( $parts );
PHP_EOL;
$original = join( " ", $parts ); //? Join  and implode are same
echo $original;

//! Character by character
// $parts2 = str_split($original);
// print_r($parts2);

$parts3 = strtok( $string, " ," );
while ( $parts3 !== false ) {
    echo $parts3 . "\n";
    $parts3 = strtok( " ," );
}
