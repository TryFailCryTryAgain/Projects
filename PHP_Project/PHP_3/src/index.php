<?php
abstract class GeoShape {
    abstract protected function area();
    abstract protected function perimeter();
}

interface ShapeInterface {
    public function displayArea();

    public function displayPerimeter();
}

trait Message {
    public function message() {
        echo "Geometry is so cool!";
    }
}

class Circle extends GeoShape implements ShapeInterface{
    use Message;
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    protected function area() {
        return pi() * pow($this->radius,2);
    }

    protected function perimeter() {
        return 2 * pi() * $this->radius;
    }

    public function displayPerimeter() {
        echo "The circle's perimeter is {$this->perimeter()}";
    }

    public function displayArea() {
        echo "The circle's area is {$this->area()}";
    }
}


Class Square extends GeoShape implements ShapeInterface{
    use Message;
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    protected function area() {
        return $this->side * $this->side;
    }

    protected function perimeter() {
        return $this->side * 4;
    }

    public function displayPerimeter() {
        echo "The square's perimeter is {$this->perimeter()}";
    }

    public function displayArea() {
        echo "The square's area is {$this->area()}";
    }
}

$circle = new Circle(10);
$circle->displayArea();
echo "</br>";
$circle->displayPerimeter();
echo "</br>";
$circle->message();
echo "</br>";


$square = new Square(10);
$square->displayArea();
echo "</br>";
$square->displayPerimeter();
echo "</br>";
$square->message();

?>