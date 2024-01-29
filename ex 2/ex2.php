<?php

class Character 
{
    protected int $life;
    protected string $name;
    
    public function __construct(int $life, string $name){
        $this->life = $life;
        $this->name = $name;
    }

    public function getLife(): int {
        return $this->life;
    }

    public function setLife(int $life): void {
        $this->life = $life;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }
    
    public function introduce() : string {
        return "Bonjour je m'appelle " . $this->name;
    }
}


class Warrior extends Character
{
    private int $energy;
    
    public function __construct(int $life, string $name, int $energy){
         parent::__construct($life,$name);
         $this->energy = $energy;
    }
    
    public function getEnergy(): int {
        return $this->energy;
    }

    public function setEnergy(int $energy): void {
        $this->energy = $energy;
    }
}

class Mage extends Character
{
    private int $mana;
    
    public function __construct(int $life, string $name, int $mana){
         parent::__construct($life, $name);
         $this->mana = $mana;
    }
    
    public function getMana(): int {
        return $this->mana;
    }

    public function setMana(int $mana): void {
        $this->mana = $mana;
    }
    
}

$character = new Character(100,"Bernard");
$warrior = new Warrior(200,"Jacques",300);
$mage = new Mage(50, "Eugène", 30);

echo $character->introduce()."<br>";

echo $warrior->introduce()."<br>";
echo "Life : ".$warrior->getLife()."<br>";
echo "énergie : ".$warrior->getEnergy()."<br>";

echo $mage->introduce()."<br>";
echo "Life : ".$mage->getLife()."<br>";
echo "Mana : ".$mage->getMana()."<br>";

