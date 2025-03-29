<?php

namespace App;

use App\Address;

class User
{
    public string $lastName;
    public string $firstName;
    public string $birthday;
    public Address $address;

    public function __construct(string $lastName, string $firstName, string $birthday, Address $address)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birthday = $birthday;
        $this->address = $address;
    }

    public function getInfo(): string
    {
        return "Имя: {$this->firstName} {$this->lastName},День рождения {$this->birthday}, Адрес {$this->address->getFullAddress()}";
    }
}
