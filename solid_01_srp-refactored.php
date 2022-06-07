<?php

// Na versão original a classe Hero tinham duas funções e uma não deveria ser dela
// Nessa versão foram criadas duas classes em que cada uma possui sua função ideal

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

    public function getName(){
        return $this->name;
    }

    public function getSkills(){
        return $this->skills;
    }    
}

class HeroFormatter {

    public static function toHtml($hero) 
    {
        $html =
            "<h3>Name:" . $hero->getName() . "</h3> " .
            "<h3>Skills: " . $hero->getSkills() . "</h3><br>";
        return $html;
    }

}

$hulk = new Hero('Hulk', 'Punch');
$ironMan = new Hero('Iron Man', 'Shooting and Flying');


echo HeroFormatter::toHtml($hulk);
echo HeroFormatter::toHtml($ironMan);


