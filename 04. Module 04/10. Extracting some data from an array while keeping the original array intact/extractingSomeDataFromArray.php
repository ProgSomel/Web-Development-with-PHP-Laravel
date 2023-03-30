<?php
$fruits = array( 'apple', 'banana', 'orange', 'plum', 'dates', 'mango' );

// $someFruits = array_slice( $fruits, 2, -2 );

// print_r( $someFruits );

//! Extracting some data from an array while keeping the original array intact//Then original Index Value soho Asbe
 $someFruits = array_slice( $fruits, 2, -2, true );

 print_r( $someFruits );

 //! For Associative Array
//  $random = array (
//       'a' =>12, 'b' =>45, 'c' =>34, 'd' =>22, 'e' =>77, 'f' =>33,83, 'g' =>91
//  );
//  $randomData = array_slice($random, 3);
//  print_r($randomData);

$random = array (
    'a' =>12, 'b' =>45, 'c' =>34, 'd' =>22, 'e' =>77, 'f' =>33,12=>83, 'g' =>91
);
$randomData = array_slice($random, 3, null, true);
print_r($randomData);



