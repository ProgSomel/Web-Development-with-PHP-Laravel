<?php
//! Converting Associative Array to String
$student = array(
    'fname' => 'Jamal',
    'lname' => 'Ahmed',
    'age' =>'15',
    'Class' => 8,
    'Sections' => 'B'
);
//print_r($student);

echo $student['fname']." ".$student['lname']."\n ";

printf("%s %s \n", $student['fname'], $student['lname']);

//! Using serialization
$serialize = serialize($student);

$newStudent = unserialize($serialize);

print_r($newStudent);

//! Using JSON
$jsonData = json_encode($student);
echo $jsonData;

//$student2 = json_decode($jsonData);//? This will Return as Object not An array
print_r($student2);

//? To Get It in Array We Should Do Like This
$student2 = json_decode($jsonData, true);
print_r($student2);



