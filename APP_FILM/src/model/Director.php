<?php
namespace src\model;
class Director{
    public string $name;
    public ?int $age;
    public int $birthDate;

    public function __construct(
        string $name, 
        ?int $age = null,
        int $birthDate
)
    {
        $this->name = $name;
        $this->age = $age;
        $this->birthDate = $birthDate;
    }
}