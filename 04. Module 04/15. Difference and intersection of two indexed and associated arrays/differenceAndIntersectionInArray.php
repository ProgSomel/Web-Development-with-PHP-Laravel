<?php
$numbers1 = array(1, 4, 3, 66, 54, 7, 23, 1, 2);
$numbers2 = array(88, 3, 21, 44, 3, 28, 1, 2, 7);

//! For Finding Common Between two Arrays
$common = array_intersect($numbers1, $numbers2);
print_r($common);

$fruits1 = array('a' => 'apple', 'b' =>'banana', 'c' =>'lemon');
$fruits2 = array('d' => 'pineapple', 'b' =>'malta', 'd' => 'grapes', 'e' => 'lemon');

// $commonf = array_intersect($fruits1, $fruits2);//? Here Intersect key diea check kore nah Check kore only value diea
// print_r($commonf);

//! To check both key and value then write like this: 
$commonf = array_intersect_assoc($fruits1, $fruits2);
print_r($commonf);

//! To find Difference value

$diff = array_diff($numbers1, $numbers2);//? Prothom Array er J Value guli 2 te nai Seiguli return hoise
print_r($diff);





