<?php
$string = "Quick brown fox jumps over the lazy dog";
//echo strpos($string, "fox");
//? strpos is case insensitive
// echo strpos($string, "Fox");//We will not get this because case sensitive

//? To get as case insensitive
// echo stripos($string, "Fox");
$offSet = strpos( $string, "Quick" );
// if($offSet) { //Here offSet value is zero in php zero considered as faLse So it will be false
//     echo "\nWord is found\n";
// }
// else {
//     echo "\nWord is not found";
// }
//? So We should write like this:
// if($offSet !==false) { //Here offSet value is zero in php zero considered as faLse So it will be false
//     echo "\nWord is found\n";
// }
// else {
//     echo "\nWord is not found";
// }

//! Getting from last side
echo strrpos( $string, "fox" );
