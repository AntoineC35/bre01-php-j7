<?php 
require "Character2.class.php";
$player1 = new Character("Ragnar");
$player1->setWeapon("Sword", 10);
$player1->fight();
echo $player1->getWeaponName();
echo $player1->getWeaponDamages();