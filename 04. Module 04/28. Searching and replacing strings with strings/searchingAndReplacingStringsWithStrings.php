<?php
$string = "Quick Brown brown Fox fox jumps over the lazy dog";
$replacedString = str_replace( 'brown', 'Brown', $string );
echo $replacedString;
//! Original String is Intact
echo PHP_EOL;
echo $string;
//! For Case insentitve
$replacedString = str_ireplace( 'brown', 'red', $string );
echo PHP_EOL;
echo $replacedString;

//! To count how many words are replaced
// echo PHP_EOL;
// $replacedString = str_ireplace( 'brown', 'red', $string, $count );
// echo "TotalnReplace : {$count}";

//! Replacing Multiple Word
echo PHP_EOL;
$string = str_replace(array('brown', 'fox'), array('red', 'cat'), $string, $count );
echo $string;
echo "TotalnReplace : {$count}";

