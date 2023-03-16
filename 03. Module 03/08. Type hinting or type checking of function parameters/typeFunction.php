<?php
function factorial($n) {
    if(gettype($n) !== 'integer') {
        return "invalid";
    }
    $result = 1;
    for($i = $n; $i > 1; $i-- ) {
        $result *= $i;
    }
    return $result;
}

$n ='av' ;
echo "factorial of {$n} is ".factorial($n);
