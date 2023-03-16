<?php
//! GLobal Scope
// $name = "Earth";

// function doSomething() {
//     echo $GLOBALS['name'];
// }
// doSomething();

// function doSomething() {
//     global $name;
//     $name = "Earth"; //? Local Variable
// }
// doSomething();
// echo $name;

function doSomething() {
    static $i;
    $i = $i ?? 0;

    $i++;
    echo $i;
    echo "\n";
}


function doExtra() {
    static $i;
    $i = $i ?? 0;

    $i++;
    echo $i;
    echo "\n";
}
doSomething();
doSomething();
doSomething();
echo PHP_EOL;
doExtra();
