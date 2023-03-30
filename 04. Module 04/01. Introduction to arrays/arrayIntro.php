<?php
$n = "12";
$students = array(
    "rahim",
    "Karim",
    123,
    "monir",
);
$n = count( $students );
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";

}
