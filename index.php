<?php
require_once 'vendor\autoload.php';
use App\Address;
use App\User;
use App\UserService;

$address = new Address("Казань", "Пушкина", "27");
$user = new User("Подоплел", "Викторовкин", "1990-04-01", $address);
echo "Информация о пользователе:\n";
echo $user->getInfo() . "\n\n";//подкл к гит хабу, создать новый проект, далее подкл этот проект в новый

$users = [
    new User("Аня", "Петрова", "2010-01-01", new Address("Санкт-Петербург", "Пушкина", "9")),
    new User("Петя", "Иванов", "2019-04-09", new Address("Москва", "Пролетарская", "7")),
    new User("Витя", "Байков", "2000-10-10", new Address("Новосибирск", "Победы", "19")),
    new User("Кирилл", "Бахтин", "2017-03-08", new Address("Йошкар-Ола", "Советская", "99")),
    new User("Максим", "Красников", "2024-06-25", new Address("Казань", "Машиностроителей", "47")),
];

$userService = new UserService();
$usersByAgeGroup = $userService->getUsersByAgeGroup($users);

echo "Дети младше 8 лет:\n";
if (empty($usersByAgeGroup['children'])) {
    echo "Нет младше 8 лет.\n";
} else {
    foreach ($usersByAgeGroup['children'] as $child) {
        echo $child->getInfo() . "\n";
    }
}

echo "Дети старше 8 лет:\n";
if (empty($usersByAgeGroup['adults'])) {
    echo "Нет старше 8 лет.\n";
} else {
    foreach ($usersByAgeGroup['adults'] as $adults) {
        echo $adults->getInfo() . "\n";
    }
}
echo "\n";