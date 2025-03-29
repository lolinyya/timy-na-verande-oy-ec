<?php

namespace App;

use App\User;

class UserService
{
    public function getChildren(array $users): array
    {
        return array_filter($users, function ($user) {
            return $this->calculateAge($user->birthday) < 8;
        });
    }

    public function getAdults(array $users): array
    {
        return array_filter($users, function ($user) {
            return $this->calculateAge($user->birthday) >= 8;
        });
    }

    public function getUsersByAgeGroup(array $users): array
    {
        return [
            'children' => $this->getChildren($users),
            'adults' => $this->getAdults($users),
        ];
    }

    private function calculateAge(string $birthday): int
    {
        $birthdayDate = new \DateTime($birthday);
        $currentDate = new  \DateTime();
        $age = $currentDate->diff($birthdayDate)->y;
        return $age;
    }
}
