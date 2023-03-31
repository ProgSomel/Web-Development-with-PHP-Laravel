<?php
class Human {
    public $name ;
    function sayHi() {
        echo "Salam";
    }
    function sayName() {
        echo "My name is {$this->name}";
        //?We should use $this here . If we don't use this then it willl not get the $name variable


    }
}
class Cat {
    function sayHi() {
        echo "Mew";
    }
}
class Dog {
    function sayHi() {
        echo "Woof";
    }
}
$h1 = new Human();//?Object
$h1 -> name = "Somel";
$c1 = new Cat();//? object
$d1 = new Dog();//? object

$h1 -> sayHi();
$h1 -> sayName();

