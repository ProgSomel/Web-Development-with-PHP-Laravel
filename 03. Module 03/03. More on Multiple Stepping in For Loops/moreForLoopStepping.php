<?php
// for ( $i = 1; $i < 100; $i++ ) {
//     echo $i % 7 == 0 ? $i."\n": " ";
// }

for($i = 0, $j = 0; $i<100; $i += 7, $j += 11) {
    echo $i."\n";
    echo $j."\n";
}