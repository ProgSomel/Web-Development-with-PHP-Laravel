<?php
$name = '';
if(isset($name)) {
    echo "Name is Set";
}
else {
    echo "Name is not Set ";
}
echo "\n";
if(empty($name)) {
    echo "Name is Empty\n";
}
else {
    echo "Name is not Empty";
}

if(isset($name) && (is_numeric($name)) || $name != '') {
    echo "Name is Set And Not Empty";
}
else {
    echo "Name is Either not Set or it\'s Empty";
}