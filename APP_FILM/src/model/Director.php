<?php
namespace src\Model;
class Director{
    public string $name;
    public int $age;
    public int $yearOfBirth;

    public function __construct(
        string $name, 
        int $age,
        int $yearOfBirth
)
    {
        $this->name = $name;
        $this->age = $age;
        $this->yearOfBirth = $yearOfBirth;
    }
}