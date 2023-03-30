<?php
$person = array(
    'fname' => 'Hello',
    'lanme' => 'World',
);

print_r($person);
unset($person['fname']);
print_r($person);