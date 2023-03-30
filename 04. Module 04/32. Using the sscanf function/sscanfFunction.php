<?php
//! sscanf() function used for stract from string
$name = "Abul Hossain 01870436887";
// $parts = sscanf($name, "%s %s %11d");//?firstName, lastName, 11 digits
//? Here 0 is not considered as Digit So, zero will not print
//? To print zero we can write like above line like this:
$parts = sscanf( $name, "%s %s %11s" );
print_r( $parts );

sscanf( $name, "%s %s %11s", $fname, $lname, $mobile );
echo $fname;
