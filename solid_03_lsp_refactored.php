<?php

// Criou-se uma interface para receber a abstração dos métodos e servir de base para outras classes

interface Quadrilateral
{
    public function setWidth($w);
    public function setHeight($h);
    public function getArea();
}

class Rectangle implements Quadrilateral 
{

    public function setWidth($w)
    {
        $this->width = $w;
    }

    public function setHeight($h)
    {
        $this->height = $h;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}

class Square implements Quadrilateral 
{
    public function setWidth($w)
    {
        $this->width = $w;
        $this->height = $w;
    }

    public function setHeight($h)
    {
        $this->height = $h;
        $this->width = $h;
    }

    public function getArea()
    {
        return $this->height * $this->width;
    }
}