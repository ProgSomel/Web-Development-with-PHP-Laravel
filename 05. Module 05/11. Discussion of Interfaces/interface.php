<?php
//?interface k implement korte hoy not extend
interface BaseAnimal {
    //? These method must be implemented otherwise error will be thrown
    function isAlive();
    function canEat( $param1, $param2 );
    function breed();
}
class Animal implements BaseAnimal {
    function isAlive() {}
    function canEat( $param1, $param2 ) {}
    function breed() {}
}
//! Interface can extends interface but class can not extend interface
interface BaseHuman extends BaseAnimal {
    function canTalk();
}
class Human implements BaseHuman {
    function isAlive() {}
    function canEat( $param1, $param2 ) {}
    function breed() {}
    function canTalk() {}
}
$h = new Human();
echo $h instanceof Animal;
