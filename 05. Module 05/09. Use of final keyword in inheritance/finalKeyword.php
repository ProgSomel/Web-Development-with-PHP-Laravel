<?php
class OurClass {
   final function doSomething() {//?for final we can not override the method in child classes
    echo "Doing Something";
   }
}
class MyClass extends OurClass {
    function doSomething() {
        echo "Doing Nothing"; 
    }
}
$mc = new MyClass();
$mc->doSomething();//?Thus we can override the base class method
