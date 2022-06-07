<?php

// Se eu criar uma classe com outra forma geométrica(Circle, por exemplo), a classe Board
// não terá como usar, pois ela está calculando apenas retângulos
// É necessário fornecer a responsabilidade de calcular a área para a classe que é dona da área
// ou seja, retângulo

class Rectangle
{
    public $widht;
    public $height;

}

class Board
{
    public $rectangles = [];

    public function areaSum()
    {
        $area = 0;
        foreach($this->rectangles as  $rectangle)
        {
            $area += $rectangle->width * $rectangle->height;
        }

        return $area;
    }
}