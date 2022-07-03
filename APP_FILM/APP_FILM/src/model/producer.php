<?php
namespace src\model;
class Producer {
    public string $name;
    public string $address;
    public string $phone;

public function __construct(
    string $name,
    string $phone,
    string $address

)
{
    $this->name = $name;
    $this->phone = $phone;
    $this->address = $address;
    }
}