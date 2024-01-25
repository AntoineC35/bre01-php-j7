<?php
class Character{
    private string $firstName = "Jane";
    private string $lastName = "Doe";
    
    public function __construct(private int $id) {
        
    }
    
     public function setId(int $id): void {
        $this->id = $id;
    }
    
    public function getId(): string {
        return $this->id;
    }
      public function setFirstName(string $firstName): void {
        $this->firstName = $firstName;
    }
    
    public function getFirstName(): string {
        return $this->firstName;
    }
      public function setLastName(string $lastName): void {
        $this->lastName = $lastName;
    }
    
    public function getLastName(): string {
        return $this->lastName;
    }
    
    public function getFullName() : string {
        return $this->firstName . " " . $this->lastName;
    }
}