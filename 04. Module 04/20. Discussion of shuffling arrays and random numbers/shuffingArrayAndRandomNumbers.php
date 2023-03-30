<?php
$numbers = range(40, 72);
$random = mt_rand(0, 32);

$luck = $numbers[$random];
if($luck % 2 == 0) {
    echo "Head";
}
else {
    echo "Tail";
}

shuffle($numbers);
print_r($numbers);
