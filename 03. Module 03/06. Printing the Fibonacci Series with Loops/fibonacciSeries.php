<?php
$a = 0;
$b = 1;
echo $a . " " . $b . " ";
for ( $i = 0; $i < 10; $i++ ) {
    $new = $a + $b . " ";
    echo $new;
    $a = $b;
    $b = $new;

}