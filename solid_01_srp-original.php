<?php

class Hero
{
    private $name;
    private $skills;

    public function __construct($name, $skills)
    {
        $this->name = $name;
        $this->skills = $skills;
    }

    public function hit()
    {
        echo 'punched an enemy';
    }

    public function toHtml() 
    {
        $html =
            "<h3>Name:" . $this->name . "</h3> " .
            "<h3>Skills: " . $this->skills . "</h3><br>";

        return $html;
    }
}

$hulk = new Hero('Hulk', 'Smash');
$ironMan = new Hero('Iron Man', 'Shooting and Flying');

print_r($hulk->toHtml());
print_r($ironMan->toHtml());