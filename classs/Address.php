<?php

namespace App;

class Address
{
    public string $city;
    public string $street;
    public string $house;

    public function __construct(string $city, string $street, string $house)
    {
        $this->city = $city;
        $this->street = $street;
        $this->house = $house;
    }

    public function getFullAddress(): string
    {
        return "{$this->city}, {$this->street}, {$this->house}";
    }
}
