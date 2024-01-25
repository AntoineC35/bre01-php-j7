<?php
require "Weapon.class.php";
class Character{
    private Weapon $weapon;
    public function __construct(private string $name) {
         $this->weapon = new Weapon("", 0);
    }
    public function setName(string $name) : void {
        $this->name = $name;
    }
    public function getName() : string {
        return $this->name;
    }
    public function getWeaponName() : string {
        return $this->weapon->getName();
    }
    public function setWeapon(string $name, int $damages) {
        $this->weapon->setName($name);
        $this->weapon->setDamages($damages);
    }
    public function getWeaponDamages() : int {
        return $this->weapon->getDamages();
    }
    public function fight() : void {
        $this->weapon->strike();
    }
}