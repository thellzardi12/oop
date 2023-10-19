<?php

Class Car
{
        public $color = 'red';
        public $numberOfTires = 4;
        public static $country = "Canada";
        public function __construct($color)
       {
            $this->color = $color;
       }



       
       public function __destruct()
       {
            echo"Objeto está sendo destruido";
       }
       public function setColor($val)
       {
            $this->color = $val;
       }
       public function getColor()
       {

                return $this->color;
       }
}

$bmw = new Car("white");
echo $bmw->getColor();
$bmw->setcolor("black");
echo "<br>";
echo $bmw->getColor();
echo "<br>";
echo Car::$country;
?>