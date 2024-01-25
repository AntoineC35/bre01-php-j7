<?php
require "User.class.php";
require "config/connexion.php";

$query = $db->prepare('SELECT * FROM users LIMIT 1');
$query->execute();
$lastUser = $query->fetch(PDO::FETCH_ASSOC);
var_dump($lastUser);

//EXO 2

$superman = [
    "first_name" => "Clark",
    "last_name" => "Kent",
    "email" => "clark.kent@test.fr"
];

$supermanObj = new User("","","");
$supermanObj->hydrate($superman);
echo $supermanObj->getFirstName();
echo "<br>";

//EXO 3

$lastUserObj = new User("","","");
$lastUserObj->hydrate($lastUser);
echo $lastUserObj->getFirstName();

// EXO 4

$query = $db->prepare('SELECT * FROM users');
$query->execute();
$usersData = $query->fetchAll(PDO::FETCH_ASSOC);

$users = [];
foreach ($usersData as $userData) {
    $user = new User("", "", "");
    $user->hydrate($userData);
    $users[] = $user;
}
var_dump($users);

// EXO 5

$superman2 = new User("","","");
$superman2->hydrate($superman);
$superman2->save($db);

$spidermanData = [
    "first_name" => "Peter",
    "last_name" => "Parker",
    "email" => "Peter.Parker@test.fr"
];

$spiderman = new User("","","");
$spiderman->hydrate($spidermanData);
$spiderman->save($db);
echo $spiderman->getId();