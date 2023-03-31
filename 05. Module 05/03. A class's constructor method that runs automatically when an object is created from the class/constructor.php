<?php
class Human {
    public $name;
    public $age;

    //! Constructor
    function __construct( $personname, $personAge = 0 ) {
        echo "New Object is Created\n";
        $this->name = $personname;
        $this->age = $personAge;

    }
    function sayHi() {
        echo "Salam\n";
        $this->sayName();
    }
    function sayName() {
        if ( $this->age ) {
            echo "My name is {$this->name}, I am {$this->age} years old.\n";
        } else {
            echo "My name is {$this->name}, I don't know my Age.\n";
            //?We should use $this here . If we don't use this then it willl not get the $name variable
        }

    }
}
$h1 = new Human( "Aminul", 22 );
$h1->sayHi();
$h2 = new Human( "Rakhi" );
$h2->sayHi();
