<?php
require "SecretIdentity.class.php";
class User{
    private ?int $id= null;
    public function __construct(private string $firstName, private string $lastName, private string $email){
        
    }
    
    public function getId() :?int {
        return $this->id;
    }
    public function setId(?int $id) : void {
        $this->id = $id;
    }
    public function getFirstName() : string {
        return $this->firstName;
    }
    public function setFirstName(string $firstName) : void {
        $this->firstName = $firstName;
    }
     public function getLastName() : string {
        return $this->lastName;
    }
    public function setLastName(string $lastName) : void {
        $this->lastName = $lastName;
    }
    public function getEmail() : string {
        return $this->email;
    }
    public function setEmail(string $email) : void {
        $this->email = $email;
    }
    
    public function hydrate(array $data): void {
        if (isset($data['id'])) {
            $this->id = (int)$data['id'];
        }
        if (isset($data['first_name'])) {
            $this->firstName = (string)$data['first_name'];
        }
        if (isset($data['last_name'])) {
            $this->lastName = (string)$data['last_name'];
        }
        if (isset($data['email'])) {
            $this->email = (string)$data['email'];
        }
    }
    
    public function save(PDO $db): void {
    $query = $db->prepare('INSERT INTO users (first_name, last_name, email) 
        VALUES (:first_name, :last_name, :email)');
    
    $parameters = [
        'email' => $this->email,
        'first_name' => $this->firstName,
        'last_name' => $this->lastName
    ];

    $query->execute($parameters);
    
    $lastUserId = $db->lastInsertId();
    
    $this->id = $lastUserId;
    }


}