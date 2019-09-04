<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 24.08.2019
 * Time: 10:49
 */


class Student {
    public $name;
    public $email;
    public $phone;

    public function __construct($name, $email, $phone) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }
}

class Education {
    public $id;
    public $img;
    public $name;
    public $likes;
    public $discription;
    public $price;

    private $users = array();

    public function signUp($name, $email, $phone) {
        array_push($this->users, new Student($name, $email, $phone));
    }
}

class Webinar extends Education {
    public $url;
    private $chat;

}



