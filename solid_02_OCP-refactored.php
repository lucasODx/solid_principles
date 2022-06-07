<?php

// Criada uma interface shape para servir de base para qualquer forma geométria
// Ambas as classes usaram a interface como referência, mas se comportam diferentemente
// A classe Board implementa qualquer objeto que venha de shape da mesma forma
// Pois o comportamento de cada forma geométrica é de responsabilidade da própria classe

interface Shape
{
    public function getArea();
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    private $radius;
    private $pi;

    public function __construct($radius, $pi = 3.14)
    {
        $this->radius = $radius;
        $this->pi = $pi;
    }

    public function getArea()
    {
        return $this->radius * $this->radius * $this->pi;
    }
}

class Board
{
    public function areaSum($geometrics)
    {
        $area = 0;

        foreach($geometrics as $geometric) {
            $area += $geometric->getArea();
        }

        return $area;
    }
}

$rectangle1 = new Rectangle(2, 2);
$rectangle2 = new Rectangle(3, 3);
$rectangle3 = new Rectangle(2, 4);
$rectangles = [$rectangle1, $rectangle2, $rectangle3];

$board = new Board();
$rectanglesResult = $board->areaSum($rectangles);

echo $rectangle1->getArea() . '</br>';
echo $rectangle2->getArea() . '</br>';
echo $rectangle3->getArea() . '</br>';
echo $rectanglesResult;