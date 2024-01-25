<?php
require "Character.class.php";

$chara1 = new Character(1);
echo $chara1->getFullName();
$chara1->setFirstName("Sarah");
$chara1->setLastName("Connor");

echo "\n";
echo $chara1->getFullName();