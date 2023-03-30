<?php
$string = "  hello \n,";
// echo $string;
// echo "Data";
//! To cut non-printable characters.Like: space, newline
PHP_EOL;
// $string = trim( $string );
// echo $string;
// echo "Data";

//! If we want to delete whitespace but want to keep \n :
// $string = trim( $string, ' ' );
// echo $string;
// echo "Data";
$string = trim( $string, ' ,' );
echo $string;
echo "Data";
//?ltrim()----> will trim only left side character
//?rtrim()----> will trim only right side character