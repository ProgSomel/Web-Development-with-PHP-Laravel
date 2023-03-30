<?php
$n = "12";
$students = array(
    "rahim",
    "Karim",
    123,
    "monir",
);
$students[2] = "Somel";
// $student = array_shift( $students ); //? First Element ber kore ane

//! Array er Sesh e Add korar jonno
$students[] = "Kamla";
array_push($students, "Salam" );

//! Array er First e Akta Element ADD Korar jonno
array_unshift($students, "chup");//? Array er First e Add korar Jonno
$n = count($students);
for ( $i = 0; $i < $n; $i++ ) {
    echo $students[$i] . "\n";
}
