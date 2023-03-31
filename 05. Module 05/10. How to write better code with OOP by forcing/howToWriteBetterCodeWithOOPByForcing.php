<?php
class Shape {

}
class Shapes {
    private $shapes;
    function __construct() {
        $this->shapes = array();
    }
    function addShape(Shape $shape ) {//?Here Shape means shape type er object hote hove
        array_push( $this->shapes, $shape );
    }
    function totalShape() {
        return count( $this->shapes );
    }
}
class Rectangle extends Shape {//? Here Rectangle extends Shape So this is Shape type meyhod or object

}
class Traingle extends Shape {

}
class Student {

}
$shapeCollection = new Shapes();
$shapeCollection->addShape( new Rectangle() );
$shapeCollection->addShape( new Traingle() );
$shapeCollection->addShape( new Student() );//?Now The code will Error beacuse student is not a shape type object. And We Are only allowing Shape type objects
echo $shapeCollection->totalShape();
