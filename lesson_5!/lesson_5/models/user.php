<?php

class User {

    static $users = [
        [
            "login" => "anna@knowknow.ru",
            "password" => "secretannapassword",
            "firstName" => "Анна",
            "lastName" => "Машкова",
        ], [
            "login" => "ivan@knowknow.ru",
            "password" => "secretivanpassword",
            "firstName" => "Иван",
            "lastName" => "Иванов",
        ]

    ];

    static function Login($login, $pasword) {
        $loginUser = null;
        foreach (self::$users as $user) {
            if($user->login == $login && $user->password == $pasword) {
                $loginUser = $user;
            }
        }
        return $loginUser;
    }
}