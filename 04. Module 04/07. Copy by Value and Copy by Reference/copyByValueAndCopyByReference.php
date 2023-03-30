<?php
// $person = array(
//     'fname' => 'Hello',
//     'lanme' => 'World',
// );
// $newPerson = $person;//? This is Call Deep Copy//Copy by Value
// $newPerson['lname'] = 'Pluto';

// print_r($person);
// print_r($newPerson); 

//! Copy By Reference // This Will Pass memory address and will Change the both

$person = array(
    'fname' => 'Hello',
    'lanme' => 'World',
);
// $newPerson = &$person;//? This is Call copy by Reference

// $newPerson['lname'] = 'Pluto';

// print_r($person);
// print_r($newPerson);

function printData(&$person) {
    $person['fname'] .= 'changed';
    print_r($person);
}
printData($person);
print_r($person);
