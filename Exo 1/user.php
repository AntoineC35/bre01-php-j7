<?php

require "User.class.php";

$user1 = new User(1, "admin", "admin");
$user2 = new User(2, "user", "user");

echo $user1->getId();
echo " ";
echo $user1->getUsername();
echo " ";
echo $user1->getPassword();

echo "\n";
echo $user2->getId();
echo " ";
echo $user2->getUsername();
echo " ";
echo $user2->getPassword();