<?php
$foods = [
    'vegetables' =>explode(', ', 'brinjal, brocoli, carrot, capsicum'),
    'fruits'     =>explode(', ', 'Orange, banana, apple'),
    'drinks'     =>explode(', ', 'water, milk')
];
print_r($foods);
array_push($foods['drinks'],'otrange juice');
print_r($foods);

echo $foods['vegetables'][0];
